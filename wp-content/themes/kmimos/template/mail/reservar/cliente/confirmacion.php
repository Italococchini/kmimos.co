<div style='text-align:center; margin-bottom: 34px;'>
	<img src='[URL_IMGS]/header_solicitud_reserva.png' style='width: 100%;' >
</div>

<div style='padding: 0px; margin-bottom: 34px;'>

	<div style='margin-bottom: 15px; font-size: 14px; line-height: 1.07; letter-spacing: 0.3px; color: #000000;'>
        
        [MODIFICACION] 

		<div style='font-family: Arial; font-size: 20px; font-weight: bold; letter-spacing: 0.4px; color: #6b1c9b; padding-bottom: 10px; text-align: center;'>
			<img style='' src='[URL_IMGS]/check.png' >
		</div>	<div style='font-family: Arial; font-size: 20px; font-weight: bold; letter-spacing: 0.4px; color: #6b1c9b; padding-bottom: 10px; text-align: center;'>
			¡Todo está listo!
		</div>	
	    <div style='font-family: Arial; font-size: 14px; line-height: 1.07; letter-spacing: 0.3px; color: #000000; padding-bottom: 25px; text-align: center;'>
	    	Tu reserva ha sido confirmada por el cuidador <strong>[name_cuidador]</strong>
	    </div>
	</div>

    [DATOS_CUIDADOR]

</div>

<div style='margin-bottom: 39px; text-align: left;'>
    <div style='font-family: Arial; font-size: 11px; font-weight: bold; letter-spacing: -0.1px; color: #0d7ad9; margin-bottom: 8px;'>
        DETALLE DE LAS MASCOTAS
    </div>
    <div style='border-radius: 2.8px; background-color: #f4f4f4;'>
        <table cellpadding="0" cellspacing="0" style='width: 100%;'>
            <tr style='border-bottom: solid 1px #000000;font-family: Arial; font-size: 10px; line-height: 1.07; letter-spacing: 0.3px; color: #000000; font-weight: 600;'>
                <td style='padding: 7px; padding-left: 37px; width: 20px;'>
                    NOMBRE
                </td>
                <td style='padding: 7px; width: 100px;'>
                    RAZA
                </td>
                <td style='padding: 7px; width: 100px;'>
                    EDAD
                </td>
                <td style='padding: 7px; width: 50px;'>
                    TAMA&Ntilde;O
                </td>
                <td style='padding: 7px;'>
                    COMPORTAMIENTO
                </td>
            </tr>
            [mascotas]
        </table>
    </div>
</div>

<div style='margin-bottom: 44px; text-align: left;'>

    <div style='font-family: Arial; font-size: 11px; font-weight: bold; letter-spacing: -0.1px; color: #0d7ad9; margin-bottom: 17px;'>
        DETALLE DEL SERVICIO
    </div>

    <div style='margin-bottom: 26px;' >   
    
        <div style='font-family: Arial; font-size: 14px; font-weight: bold; line-height: 0.86; letter-spacing: 0.3px; color: #000000; margin-bottom: 9px;'> 
            Servicio <span style='font-weight: normal;'>[tipo_servicio]</span>
        </div>  
        
        <table cellpadding="0" cellspacing="0" style='padding-right: 20px; overflow: hidden; font-family: Arial; font-size: 12px; letter-spacing: 0.3px; color: #000000;'>
            
            <tr style=''>
                <td style='display: table-cell; height: 20px; vertical-align: middle; width: 42px;'>
                  <img src='[URL_IMGS]/min_calendar.png'  > 
                </td>
                <td style='display: table-cell; height: 20px; vertical-align: middle; font-size: 12px;'> 
                    Del [inicio] al [fin] del [anio]
                </td>
            </tr>
            
            <tr style=''>
                <td style='display: table-cell; height: 20px; vertical-align: middle; width: 42px;'>
                  <img src='[URL_IMGS]/min_clock.png'  > 
                </td>
                <td style='display: table-cell; height: 20px; vertical-align: middle; font-size: 12px;'> 
                    [tiempo]
                </td>
            </tr>
            
            <tr style=''>
                <td style='display: table-cell; height: 20px; vertical-align: middle; width: 42px;'>
                  <img src='[URL_IMGS]/min_cash.png'  > 
                </td>
                <td style='display: table-cell; height: 20px; vertical-align: middle; font-size: 12px;'> 
                    Pago por [tipo_pago]
                </td>
            </tr>
                                                            
        </table>  
        
    </div>
    
    <div style='overflow: hidden;'>
        <table cellpadding="0" cellspacing="0" style='box-sizing: border-box; width: 100%; background-color: #FFF; font-family: Arial; font-size: 10px; font-weight: bold; line-height: 1.5; letter-spacing: 0.2px; color: #000000; border: solid 1px #CCC; border-radius: 2.8px; margin-bottom: 15px;'>
            <tr style=''>
                <td style=' width: 80px; background-color: #f4f4f4; text-align: center; vertical-align: middle;'>
                    <img src='[URL_IMGS]/dog.png'>
                </td>
                <td style=' width: 150px; padding: 7px; padding-left: 37px; border-bottom: solid 1px #CCC;'>
                    CANTIDAD
                </td>
                <td style=' width: 170px; padding: 7px; border-bottom: solid 1px #CCC;'>
                    TIEMPO
                </td>
                <td style=' width: 100px; padding: 7px; border-bottom: solid 1px #CCC;'>
                    PRECIO C/U
                </td>
                <td style=' width: 100px; padding: 7px; border-bottom: solid 1px #CCC; text-align: right;'>
                    SUBTOTAL
                </td>
            </tr>

            [desglose]

            [ADICIONALES]
            [TRANSPORTE]


        </table>
    </div>
    
    [TOTALES]

</div>

<div style='display: table; width: 100%; padding-bottom: 45px'>
    <div style='display: table-row;'>
        <div style='display: table-cell; width: 52px; vertical-align: top;'>
            <img src='[URL_IMGS]/exclamacion.png' style='width: 33px;' >
        </div>
        <div style='display: table-cell; font-family: Arial; font-size: 14px; letter-spacing: 0.2px; color: #2d2d2d; padding-bottom: 9px; vertical-align: top;'>
            Si necesitas cancelar el servicio te pedimos que notifiques al cuidador y al staff kmimos con al menos 48 horas de anticipación a la fecha de inicio de la reserva, de lo contrario se cobrará un monto del 20% sobre el total de la reserva por concepto de la cancelación tardía.
        </div>
    </div>
</div>