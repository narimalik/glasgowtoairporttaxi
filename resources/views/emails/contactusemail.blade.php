<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $subject ?? 'New Booking Enquiry' }}</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f8; padding:30px 0;">
    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:6px; overflow:hidden; box-shadow:0 3px 10px rgba(0,0,0,0.05);">

                <!-- Header -->
                <tr>
                    <td style="background:#225378; padding:20px; text-align:center;">
                        <h1 style="color:#ffffff; margin:0; font-size:22px;">
                            {{ config('app.name') }}
                        </h1>
                        <p style="color:#ffffff; margin:5px 0 0; font-size:14px;">
                            Executive Airport Transfers & Chauffeur Services
                        </p>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:30px; color:#333333; font-size:14px; line-height:1.6;">

                        <h2 style="margin-top:0; color:#225378;">{{ $contactusObj->subject ?? ' Enquiry' }}</h2>

                        <p><strong>Name:</strong> {{ $contactusObj->name ?? 'N/A' }}</p>
                        <p><strong>Email:</strong> {{ $contactusObj->email ?? 'N/A' }}</p>
                       
                        <hr style="border:none; border-top:1px solid #eeeeee; margin:20px 0;">

                        <p><strong>Message:</strong></p>
                        <p style="background:#f9f9f9; padding:15px; border-radius:4px;">
                            {{ $contactusObj->comments ?? 'No additional message provided.' }}
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#f4f6f8; padding:20px; text-align:center; font-size:12px; color:#777;">
                        © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        <br>
                        24/7 Airport Transfers | Executive Chauffeur Service
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
