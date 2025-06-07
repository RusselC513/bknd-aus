<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nuevo mensaje de contacto</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 1.6; color: #333333; background-color: #f4f4f4; margin: 0; padding: 0; width: 100% !important;">
    
    <!-- Wrapper principal -->
    <div style="width: 100%; background-color: #f4f4f4; padding: 20px 0;">
        
        <!-- Contenedor del email -->
        <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            
            <!-- Header -->
            <div style="background-color: #2c3e50; color: #ffffff; padding: 30px; text-align: center;">
                <h1 style="margin: 0; font-size: 24px; font-weight: 300; color: #ffffff;">Nuevo Mensaje de Contacto</h1>
            </div>
            
            <!-- Contenido principal -->
            <div style="padding: 40px 30px;">
                
                <h2 style="color: #2c3e50; font-size: 22px; margin-bottom: 25px; font-weight: 400; margin-top: 0;">Nuevo mensaje de contacto</h2>
                
                <div style="background-color: #f8f9fa; padding: 25px; border-radius: 8px; border-left: 4px solid #3498db; margin-bottom: 20px;">
                    <p style="margin-bottom: 15px; color: #555555; margin-top: 0; font-size: 16px;">
                        <strong style="color: #2c3e50; font-weight: bold;">Nombre:</strong> {{ $data['name'] }}
                    </p>
                    <p style="margin-bottom: 0; color: #555555; font-size: 16px;">
                        <strong style="color: #2c3e50; font-weight: bold;">Email:</strong> 
                        <a href="mailto:{{ $data['email'] }}" style="color: #3498db; text-decoration: none;">{{ $data['email'] }}</a>
                    </p>
                </div>
                
                <!-- Información adicional -->
                <div style="background-color: #e8f5e8; padding: 20px; border-radius: 8px; margin-top: 25px;">
                    <p style="margin: 0; color: #27ae60; font-size: 14px; text-align: center;">
                        <strong>💡 Tip:</strong> Puedes responder directamente haciendo clic en el email del contacto
                    </p>
                </div>
                
                <!-- Separador -->
                <hr style="border: none; border-top: 1px solid #eee; margin: 30px 0;">
                
                <!-- Información del sistema -->
                <p style="font-size: 12px; color: #777; margin-bottom: 0; text-align: center;">
                    Este mensaje fue enviado automáticamente desde el formulario de contacto<br>
                    <small style="color: #999;">Fecha: {{ date('d/m/Y H:i:s') }}</small>
                </p>
                
            </div>
            
        </div>
        
    </div>

</body>
</html>