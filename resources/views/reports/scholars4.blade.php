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
        <table style="border-bottom-style: hidden; border-right-style: hidden; border-top-style: hidden; border-left-style: hidden;">
            <tr>
                <td style="width: 40%; text-align: left; font-weight: bold; color: black;"><hr/></td>
            </tr>
        </table>
        <table style="margin-top: -5px; border-bottom-style: hidden; border-right-style: hidden; border-top-style: hidden; border-left-style: hidden;">
            <tr>
                <td style="border-left-style: hidden; width: 50%; text-align: right; font-size: 9px;">RGN-REPO 3</td>
            </tr>
        </table>
    </div>


    <div class="content">
        <table style="border: hidden; font-size: 10px; width: 40%">
            <tbody>
                <tr>
                    <td width="30%" style="border: hidden; padding: 1px;">RGN-REPO 3 : </td>
                    <td width="70%" style="border: hidden; padding: 1px;"><span style="font-weight: bold; color: black;">LIST OF ALL SCHOLARS WITH RESPECTIVE STATUS</span></td>
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

        <table style="border: 1px solid black; font-size: 8px; margin-top: 20px;">
            <thead style="background-color:#c8c8c8; padding: 5px; font-size: 8px; text-transform: uppercase;">
            <thead style="background-color:#c8c8c8; padding: 5px; font-size: 10px; text-transform: uppercase;">
                <tr>    
                    <th style="vertical-align: middle;" rowspan="2" width="15%">Program</th>
                    <th style="vertical-align: middle;" rowspan="2" width="10">No. of Graduates</th>
                    <th style="vertical-align: middle;" colspan="6">Academic Award</th>
                    <th style="vertical-align: middle;" rowspan="2" width="15%">Completed earlier than the prescribed period of study</th>
                </tr>
                <tr>
                    <th style="text-align: center;">Summa Cum Laude</th>
                    <th style="text-align: center;">Magna Cum Laude</th>
                    <th style="text-align: center;">Cum Laude</th>
                    <th style="text-align: center;">Honorable Mention</th>
                    <th style="text-align: center;">Academic Distinction</th>
                    <th style="text-align: center;">Total</th>
                </tr>
            </thead>
            </thead>
        </table>
    </div>
</body>
</html>