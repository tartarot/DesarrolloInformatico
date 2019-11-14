<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario declaracion de renta 230</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
	<script>
		function Operaciones() 
		{
            var n27 = document.getElementById('TP').value;
            var n28 = document.getElementById('Deudas').value;
			var RestaP = parseInt(n27) - parseInt(n28);
			document.getElementById('TR').value=RestaP;

			var n49 = document.getElementById('IG').value;
			var n50 = document.getElementById('CG').value;
			var n51 = document.getElementById('GE').value;
			var RestaG = parseInt(n49) - parseInt(n50) - parseInt(n51);
			document.getElementById('GG').value=RestaG;

			var n52 = document.getElementById('IRM').value;
			var n53 = document.getElementById('DT').value;
			var RestaI = parseInt(n52) - parseInt(n53);
			document.getElementById('IRN').value=RestaI;

			var n54 = document.getElementById('IRN').value;
			var n55 = document.getElementById('IGO').value;
			var SumaTI = parseInt(n54) + parseInt(n55);
			document.getElementById('TIC').value=SumaTI;
		}
    </script>
</head>
	<body>
		<div>
			<table align="center">
				<tr>
					<td align="center"><img src="Dian.jpg" width="250" height="80"></td>
					<td align="center"><h3>Declaracion Anual de Impuesto Minimo Alternativo Simple<br>(IMAS) para Empleados</h3></td>
					<td align="center" bgcolor="#D3E5D1" style="color:#178212"><h4>Privada</h4></td>
					<td align="center"><img src="230.jpg" width="250" height="80"></td>
				</tr>
			</table>
		</div>
		<div>
			<table align="center" width="1087px" height= "10px"> 
				<tr>
					<td>1. Año</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="5" align="right">Colombia</td>
					<td>4. Numero del formulario</td>
				</tr>
				<tr>
					<td colspan="5" align="right">un compromiso que no podemos evadir</td>
					<td rowspan="6"></td>
				</tr>
				<tr>
					<td colspan="5" align="center">Lea cuidadosamente las instrucciones</td>
				</tr>
			</table>
		</div>
		<div>
			<table align="center" width="1087px" height= "10px">
				<tr>	
					<td rowspan="3">Datos del declarante</td>
					<td colspan="14">5. Numero de identificacion tributaria (NIT)</td>
					<td>6. DV</td>
					<td>7. Primer apellido</td>
					<td>8. Segundo apellido</td>
					<td>9. Primer nombre</td>
					<td>10. Otros nombres</td>
					<td colspan="2">12. codigo de direccion seccional</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="7">24. Actividad economica</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td colspan="3"></td>
					<td colspan="1">Si es una correcion indique:</td>
					<td></td>
					<td>25. Cod</td>
					<td></td>
					<td>26. No. Formulario anterior</td>
					<td colspan="2"></td>
				</tr>
			</table>
		</div>
		<div>
			<table align="center">
				<tr>
					<td rowspan="4">Patrimonio</td>
					<td>Total patrimonio bruto</td>
					<td>27</td>
					<td><input type="text" id="TP"></td>
				</tr>
				<tr>
					<td>Deudas</td>
					<td>28</td>
					<td><input type="text" id="Deudas"></td>
				</tr>
				<tr>
					<td>Total patrimonio liquido (27-28, si el resultado es negativo escriba 0)</td>
					<td>29</td>
					<td><input type="text" id="TR"></td>
				</tr>
			</table>
		</div>
		<div>
			<table align="center">
				<tr>
					<td rowspan="18">Determinacion renta gravable alternativa (RGA) - IMAS</td>
					<td>Ingresos brutos del empleado</td>
					<td>30</td>
					<td></td>
				</tr>
				<tr>
					<td>Otros ingresos</td>
					<td>31</td>
					<td></td>
				</tr>
				<tr>
					<td>Ingresos excluidos de la base (RGA) del IMAS</td>
					<td>32</td>
					<td></td>
				</tr>
				<tr>
					<td>Total ingresos (30 + 31 - 32)</td>
					<td>33</td>
					<td></td>
				</tr>
				<tr>
					<td>Dividendos y participaciones no gravados</td>
					<td>34</td>
					<td></td>
				</tr>
				<tr>
					<td>Indemnizaciones en dinero o en especie por seguro de daño</td>
					<td>35</td>
					<td></td>
				</tr>
				<tr>
					<td>Aportes obligatorios al sistema general de seguridad social a cargo del empleado</td>
					<td>36</td>
					<td></td>
				</tr>
				<tr>
					<td>Gastos de respresentacion exentos</td>
					<td>37</td>
					<td></td>
				</tr>
				<tr>
					<td>Pagos catastroficos en salud efectivamente certificados no cubiertos por el POS</td>
					<td>38</td>
					<td></td>
				</tr>
				<tr>
					<td>Perdidas por desastres o calamidades publicas</td>
					<td>39</td>
					<td></td>
				</tr>
				<tr>
					<td>Aportes obligatorios a seguridad social de un empleado del servicio domestico</td>
					<td>40</td>
					<td></td>
				</tr>
				<tr>
					<td>Costo fiscal de los bienes enajenados</td>
					<td>41</td>
					<td></td>
				</tr>
				<tr>
					<td>Indemnizacion por seguro de vida, por accidente de trabajo o enfermedad</td>
					<td>42</td>
					<td></td>
				</tr>
				<tr>
					<td>Licencia de maternidad y gastos funerarios</td>
					<td>43</td>
					<td></td>
				</tr>
				<tr>
					<td>Exceso del salario basico oficiales y suboficiales de las FFMM y la Policia Nacional</td>
					<td>44</td>
					<td></td>
				</tr>
				<tr>
					<td>Seguro por muerte y compensacion por muerte de las FFMM y la Policia Nacional</td>
					<td>45</td>
					<td></td>
				</tr>
				<tr>
					<td>Retiros fondos de pension de jubilacion e invalidez; fondos de cesantias y cuentas AFC</td>
					<td>46</td>
					<td></td>
				</tr>
				<tr>
					<td>Renta gravable alternativa - RGA (33 - 34 a 46, si el resultado es negativo escriba 0)</td>
					<td>47</td>
					<td></td>
				</tr>			
			</table>
		</div>
		<div>
			<table align="center">
				<tr>
					<td rowspan="4">Ganancias Ocacionales<br><br><input type="button" onclick="Operaciones();" value="Calcular"></td>
					<td>Ingresos por ganancias ocacionales</td>
					<td>48</td>
					<td><input type="text" id="IG"></td>
				</tr>
				<tr>
					<td>Costo por ganancias ocacionales</td>
					<td>49</td>
					<td><input type="text" id="CG"></td>
				</tr>
				<tr>
					<td>Ganancias ocacionales exentas y no gravadas</td>
					<td>50</td>
					<td><input type="text" id="GE"></td>
				</tr>
				<tr>
					<td>Ganancias ocacionales gravables (48 - 49 - 50, si el resultado es negativo escriba 0)</td>
					<td>51</td>
					<td><input type="text" id="GG"></td>
				</tr>
			</table>
		</div>
		<div>
			<table align="center">
				<tr>
					<td rowspan="13">Liquidacion privada</td>
					<td>Impuestos sobre la renta minimo alternativo simple - IMAS</td>
					<td>52</td>
					<td><input type="text" id="IRM"></td>
				</tr>
				<tr>
					<td>Descuentos tributarios</td>
					<td>53</td>
					<td><input type="text" id="DT"></td>
				</tr>
				<tr>
					<td>Impuesto neto de renta (52 - 53)</td>
					<td>54</td>
					<td><input type="text" id="IRN"></td>
				</tr>
				<tr>
					<td>Impuesto de ganancias ocacionales</td>
					<td>55</td>
					<td><input type="text" id="IGO"></td>
				</tr>
				<tr>
					<td>Total impuesto a cargo (54 + 55)</td>
					<td>56</td>
					<td><input type="text" id="TIC"></td>
				</tr>
				<tr>
					<td>Anticipo renta por el año gravable anterior</td>
					<td>57</td>
					<td></td>
				</tr>
				<tr>
					<td>Saldo a favor año gravable anterior sin solicitud de devolucion o compensacion</td>
					<td>58</td>
					<td></td>
				</tr>
				<tr>
					<td>Total retenciones año gravable 2016</td>
					<td>59</td>
					<td></td>
				</tr>
				<tr>
					<td>Anticipo renta por el año gravable siguiente</td>
					<td>60</td>
					<td></td>
				</tr>
				<tr>
					<td>Saldo a pagar por impuesto (56 + 60 - 57 - 58 - 59, si el resultado es negativo escriba 0)</td>
					<td>61</td>
					<td></td>
				</tr>
				<tr>
					<td>Sanciones</td>
					<td>62</td>
					<td></td>
				</tr>
				<tr>
					<td>Total saldo a pagar (56 + 60 + 62 - 57 - 58 -59, si el resultado es negativo escriba 0)</td>
					<td>63</td>
					<td></td>
				</tr>
				<tr>
					<td>o Total saldo a favor (57 + 58 + 59 - 56 - 60 - 62, si el resultado es negativo escriba 0)</td>
					<td>64</td>
					<td></td>
				</tr>
			</table>
		</div>
		<div>
			<Table align="center" width="1087px" height= "10px">
				<tr>
					<td>65. No. Identificacione signatario</td>
					<td></td>
					<td>66. D.V.</td>
					<td></td>
				</tr>
			</Table>
		</div>
		<div>
			<table align="center" width="1087px" height= "10px">
				<tr>
					<td>981. Cod. de Representacion </td>
					<td></td>
					<td></td>
					<td>997. Espacio exclusivo para el sello de la entidad-recaudadora</td>
					<td>980. Pago total</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3">Firma del declarante o quien lo representa</td>
					<td rowspan="2">997</td>
					<td colspan="3">996. Espacio para el numero interno de la DIAN / Adhesivo</td>
				</tr>
				<tr>
					<td colspan="3"></td>
					<td colspan="3">996</td>
				</tr>
			</table>
		</div>
			<button id="btnCapturar">Tomar captura</button>
			
			<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.1/dist/html2canvas.min.js"></script> 
			<script src="script.js"></script>
	</body>
</html>