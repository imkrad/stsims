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
                <tr>    
                    <th style="vertical-align: middle;" width="12%">Year of Award</th>
                    <th style="vertical-align: middle;" width="12%">Name</th>
                    <th style="vertical-align: middle;" width="12%">School</th>
                    <th style="vertical-align: middle;" width="12%">Course</th>
                    <th style="vertical-align: middle;" width="12%">Semester & Academic Year Last reported</th>
                </tr> 
            </thead>
        </table>
    </div>
</body>
</html>