<?php

namespace App\Services\Operation\Scholar;

use App\Models\ScholarTracer;

class TracerClass
{
    public function save($request)
    {
        $tracer = ScholarTracer::firstOrCreate(
            ['scholar_id' => $request->id],
            ['information' => []] 
        );

        $information = $tracer->information ?? [];

        $typeMapping = [
            'Employment Information' => 'employment_information',
            'Professional Affiliations' => 'professional_affiliations',
            'Research and Development Involvement' => 'research_and_development',
            'Awards and Recognitions Received' => 'awards_and_recognitions',
        ];

        $jsonKey = $typeMapping[$request->type];

        if (!isset($information[$jsonKey])) {
            $information[$jsonKey] = [];
        }

        $information[$jsonKey][] = $request->validated();
        $tracer->update(['information' => $information]);

        return [
            'data' => '',
            'message' => 'Tracer added.', 
            'info' => 'Tracer information updated successfully!',
        ];
    }
}
