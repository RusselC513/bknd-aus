<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Quote Request</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #333; background-color: #f4f4f4; margin: 0; padding: 0;">

    <div style="width: 100%; background-color: #f4f4f4; padding: 30px 0;">
        <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">

            <!-- Header -->
            <div style="background-color: #1e9b71; padding: 30px; text-align: center;">
                <h1 style="margin: 0; font-size: 22px; font-weight: 600; color: #ffffff; letter-spacing: -0.3px;">
                    📋 New Quote Request
                </h1>
                <p style="margin: 8px 0 0; color: rgba(255,255,255,0.8); font-size: 13px;">
                    Glow & Harmony · {{ date('d M Y, H:i') }}
                </p>
            </div>

            <!-- Body -->
            <div style="padding: 35px 30px;">

                <!-- Client info -->
                <h2 style="margin: 0 0 16px; font-size: 15px; font-weight: 600; color: #1e9b71; text-transform: uppercase; letter-spacing: 0.5px;">
                    Client Information
                </h2>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 28px;">
                    <tr>
                        <td style="padding: 10px 14px; background: #f8fffe; border: 1px solid #e0f5ed; width: 35%;"><strong style="color: #555;">Name</strong></td>
                        <td style="padding: 10px 14px; background: #f8fffe; border: 1px solid #e0f5ed; color: #222;">{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 14px; background: #fff; border: 1px solid #e0f5ed;"><strong style="color: #555;">Email</strong></td>
                        <td style="padding: 10px 14px; background: #fff; border: 1px solid #e0f5ed;">
                            <a href="mailto:{{ $data['email'] }}" style="color: #1e9b71; text-decoration: none;">{{ $data['email'] }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 14px; background: #f8fffe; border: 1px solid #e0f5ed;"><strong style="color: #555;">Phone</strong></td>
                        <td style="padding: 10px 14px; background: #f8fffe; border: 1px solid #e0f5ed;">
                            <a href="tel:{{ $data['phone'] }}" style="color: #1e9b71; text-decoration: none;">{{ $data['phone'] }}</a>
                        </td>
                    </tr>
                </table>

                <!-- Service info -->
                <h2 style="margin: 0 0 16px; font-size: 15px; font-weight: 600; color: #1e9b71; text-transform: uppercase; letter-spacing: 0.5px;">
                    Service Details
                </h2>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 28px;">
                    <tr>
                        <td style="padding: 10px 14px; background: #f8fffe; border: 1px solid #e0f5ed; width: 35%;"><strong style="color: #555;">Service</strong></td>
                        <td style="padding: 10px 14px; background: #f8fffe; border: 1px solid #e0f5ed; color: #222;">{{ ucwords(str_replace('-', ' ', $data['service'])) }}</td>
                    </tr>
                    @if(!empty($data['size']))
                    <tr>
                        <td style="padding: 10px 14px; background: #fff; border: 1px solid #e0f5ed;"><strong style="color: #555;">Property size</strong></td>
                        <td style="padding: 10px 14px; background: #fff; border: 1px solid #e0f5ed; color: #222;">
                            @php $sizes = ['small' => '1-2 bedrooms', 'medium' => '3-4 bedrooms', 'large' => '5+ bedrooms']; @endphp
                            {{ $sizes[$data['size']] ?? $data['size'] }}
                        </td>
                    </tr>
                    @endif
                    @if(!empty($data['frequency']))
                    <tr>
                        <td style="padding: 10px 14px; background: #f8fffe; border: 1px solid #e0f5ed;"><strong style="color: #555;">Frequency</strong></td>
                        <td style="padding: 10px 14px; background: #f8fffe; border: 1px solid #e0f5ed; color: #222;">{{ ucfirst($data['frequency']) }}</td>
                    </tr>
                    @endif
                    @if(!empty($data['message']))
                    <tr>
                        <td style="padding: 10px 14px; background: #fff; border: 1px solid #e0f5ed;"><strong style="color: #555;">Details</strong></td>
                        <td style="padding: 10px 14px; background: #fff; border: 1px solid #e0f5ed; color: #222;">{{ $data['message'] }}</td>
                    </tr>
                    @endif
                </table>

                <!-- CTA -->
                <div style="text-align: center; margin-top: 10px;">
                    <a href="mailto:{{ $data['email'] }}"
                        style="display: inline-block; background-color: #1e9b71; color: #fff; text-decoration: none; padding: 12px 32px; border-radius: 8px; font-weight: 600; font-size: 14px;">
                        Reply to Client →
                    </a>
                </div>
            </div>

            <!-- Footer -->
            <div style="background-color: #f8f8f8; padding: 20px 30px; text-align: center; border-top: 1px solid #eee;">
                <p style="margin: 0; font-size: 12px; color: #999;">
                    Sent automatically from glowandharmony.com.au
                </p>
            </div>

        </div>
    </div>

</body>
</html>
