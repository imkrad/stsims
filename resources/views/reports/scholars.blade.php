<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        /* Styles for the footer */
        @page {
           
        }

        html * {
            font-family:Arial, Helvetica, sans-serif;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 9px;
        }
        .content {
            margin-bottom:55px; /* Space for the footer */
        }

        table,
        td,
        th {
            border: .5px solid black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            padding: 5px;
            vertical-align: top;
        }
        td {
            padding: 5px;
        }
        .footer {
            position: fixed;
            bottom: -10;
            width: 100%;
            left: 0;
            margin-left: auto;
            margin-right: auto;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    
    <div class="footer">
        <table style="margin-bottom: -7px; border-bottom-style: hidden; border-right-style: hidden; border-top-style: hidden; border-left-style: hidden;">
            <tr>
                <td style="border-left-style: hidden; width: 50%; font-size: 9px;">GS (Good Standing) &nbsp;&nbsp;|&nbsp;&nbsp; CUP (Continue Under Probation) &nbsp;&nbsp;|&nbsp;&nbsp; CPA (Continue with Partial Allowance) &nbsp;&nbsp;|&nbsp;&nbsp; LOA (Leave of Absence) &nbsp;&nbsp;|&nbsp;&nbsp; NR (No Report)</td>
            </tr>
        </table>
        <table style="border-bottom-style: hidden; border-right-style: hidden; border-top-style: hidden; border-left-style: hidden;">
            <tr>
                <td style="width: 40%; text-align: left; font-weight: bold; color: black;"><hr/></td>
            </tr>
        </table>
        <table style="margin-top: -5px; border-bottom-style: hidden; border-right-style: hidden; border-top-style: hidden; border-left-style: hidden;">
            <tr>
                <td style="border-left-style: hidden; width: 50%; text-align: right; font-size: 11px;">RGN-REPO 1</td>
            </tr>
        </table>
    </div>


    <div class="content">
        <table style="border: hidden; font-size: 12px; width: 40%">
            <tbody>
                <tr>
                    <td width="30%" style="border: hidden; padding: 1px;">RGN-REPO 1 : </td>
                    <td width="70%" style="border: hidden; padding: 1px;"><span style="font-weight: bold; color: black;">SUMMARY STATUS OF SCHOLARS</span></td>
                </tr>
                <tr>
                    <td width="30%" style="border: hidden; padding: 1px;">Semester/Term : </td>
                    <td width="70%" style="border: hidden; padding: 1px;"><span style="font-weight: bold; color: black;">As of End of the {{$term}}, AY {{$ay}}</span></td>
                </tr>
                <tr>
                    <td width="30%" style="border: hidden; padding: 1px;">Scholarship Program : </td>
                    <td width="70%" style="border: hidden; padding: 1px;"><span style="font-weight: bold; color: black;">{{$program}}</span></td>
                </tr>
                <tr>
                    <td width="30%" style="border: hidden; padding: 1px;">Region: </td>
                    <td width="70%" style="border: hidden; padding: 1px;"><span style="font-weight: bold; color: black;">{{$agency['region']}} - {{$agency['name']}}</span></td>
                </tr>
            </tbody>
        </table>

        <table style="border: 1px solid black; font-size: 12px; margin-top: 20px;">
            <thead style="background-color:#c8c8c8; padding: 5px; font-size: 10px; text-transform: uppercase;">
                <tr>    
                    <th style="vertical-align: middle;" rowspan="2" width="12%">Year of Award</th>
                    <th style="vertical-align: middle;" colspan="6">Ongoing</th>
                    <th style="vertical-align: middle;" rowspan="2" width="12%">Withdrew</th>
                    <th style="vertical-align: middle;" rowspan="2" width="12%">Terminated</th>
                    <th style="vertical-align: middle;" rowspan="2" width="12%">Graduated</th>
                    <th style="text-align: center; vertical-align: middle;" rowspan="2" width="12%">Non-Compliance</th>
                </tr>
                <tr>
                    <th style="text-align: center;">GS</th>
                    <th style="text-align: center;">CUP</th>
                    <th style="text-align: center;">CPA</th>
                    <th style="text-align: center;">LOA</th>
                    <th style="text-align: center;">NR</th>
                    <th style="text-align: center;">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($scholars as $index => $scholar)
                <tr style="text-align: center; font-size: 12px;">
                    <td style="text-align: center; font-weight: bold; padding: 10px;">{{$scholar['year']}}</td>
                    @foreach($scholar['counts'] as $index => $count)
                        <td style="padding: 10px;">{{$count}}</td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>