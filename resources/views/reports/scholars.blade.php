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
            padding: 3px;
            vertical-align: top;
        }
        td {
            padding: 3px;
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
                <td style="border-left-style: hidden; width: 50%; text-align: right; font-size: 10px;">RGN-REPO 1</td>
            </tr>
        </table>
    </div>


    <div class="content">
        <!-- <div style="font-family:Arial;">
            <p style="font-size: 10px; margin-bottom: 0px; text-transform: uppercase;">{{$agency['name']}}</p>
            <p style="font-size: 11px; margin-bottom: 0px; font-weight: bold;">REGIONAL STANDARDS AND TESTING LABORATORIES</p>
            <p style="font-size: 11px;">Pettit Baracks, Zamboanga City | (062) 991-1024</p>
        </div> -->
        <table style="border: hidden; font-size: 10px; width: 40%">
            <tbody>
                <tr>
                    <td width="30%" style="border: hidden; padding: 1px;">RGN-REPO 1 : </td>
                    <td width="70%" style="border: hidden; padding: 1px;"><span style="font-weight: bold; color: black;">SUMMARY STATUS OF SCHOLARS</span></td>
                </tr>
                <tr>
                    <td width="30%" style="border: hidden; padding: 1px;">Semester/Term : </td>
                    <td width="70%" style="border: hidden; padding: 1px;"><span style="font-weight: bold; color: black;">As of End of the Second Semester, AY 2023-2024</span></td>
                </tr>
                <tr>
                    <td width="30%" style="border: hidden; padding: 1px;">Scholarship Program : </td>
                    <td width="70%" style="border: hidden; padding: 1px;"><span style="font-weight: bold; color: black;">123131</span></td>
                </tr>
                <tr>
                    <td width="30%" style="border: hidden; padding: 1px;">Region: </td>
                    <td width="70%" style="border: hidden; padding: 1px;"><span style="font-weight: bold; color: black;">{{$agency['region']}} - {{$agency['name']}}</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>