<?php

namespace App\Services;

use App\Models\SchoolCampus;
use App\Models\ListRole;
use App\Models\ListCourse;
use App\Models\ListAgency;
use App\Models\ListStatus;
use App\Models\ListDropdown;
use App\Models\LocationRegion;
use App\Models\LocationProvince;
use App\Models\LocationMunicipality;
use App\Models\LocationBarangay;

class DropdownClass
{   
    public function statuses(){
        $data = ListStatus::whereIn('type',['Progress','Ongoing'])->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'color' => $item->color,
                'others' => $item->others,
                'type' => $item->type,
            ];
        });
        return $data;
    }

    public function roles(){
        $data = ListRole::all()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function agencies(){
        $data = ListAgency::all()->map(function ($item) {
            return [
                'value' => $item->id,
                'region' => $item->region_code,
                'name' => $item->acronym
            ];
        });
        return $data;
    }

    public function term_types(){
        $data = ListDropdown::where('type','Term')->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'classification' => $item->classification,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function levels(){
        $data = ListDropdown::where('classification','Level')->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'others' => $item->others,
                'color' => $item->color
            ];
        });
        return $data;
    }

    public function semesters($semester){
        $data = ListDropdown::where('classification',$semester)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'others' => $item->others,
            ];
        });
        return $data;
    }

    public function certifications(){
        $data = ListDropdown::where('classification','Certification')->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function gradings(){
        $data = ListDropdown::where('classification','Grading System')->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function terms(){
        $data = ListDropdown::where('classification','Term Type')->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function classes(){
        $data = ListDropdown::where('classification','Class')->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function programs(){
        $data = ListDropdown::where('classification','Scholarship')->where('type','Category')->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function types(){
        $data = ListDropdown::where('classification','Scholarship')->where('type','Type')->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'classification' => $item->classification,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function regions(){
        $data = LocationRegion::all()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->region
            ];
        });
        return $data;
    }

    public function provinces($code){
        $data = LocationProvince::where('region_code',$code)->get()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function courses($code){
        $data = ListCourse::where('name','LIKE',"%{$code}%")
        ->orWhere('shortcut','LIKE',"%{$code}%")
        ->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->shortcut
            ];
        });
        return $data;
    }

    public function municipalities($code){
        $data = LocationMunicipality::where('province_code',$code)->get()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function barangays($code){
        $data = LocationBarangay::where('municipality_code',$code)->get()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function schools($code){
        $data = SchoolCampus::withWhereHas('school', function ($query) use ($code){
            $query->where('name','LIKE',"%{$code}%")->orWhere('shortcut','LIKE',"%{$code}%");
        })
        ->get()->map(function ($item) {
            $name = ($item->campus === 'Main') ? '' : ' - '.$item->campus;
            return [
                'value' => $item->id,
                'name' => $item->school->name.$name
            ];
        });
        return $data;
    }
}
