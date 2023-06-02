<?php

require '../../fpdf/fpdf.php';


class PDF extends FPDF
{


    function Header()
    {
        $this->SetFont('Arial', 'B', 8);


        //pruebas
        $this->Cell(130, 4, 'Detalle de Queja', 0, 1, 'C');

        $this->SetFont('Arial', 'I', 8);
        $this->Cell(50, 3, utf8_decode("FECHA: " . date("Y/m/d")), 0, 1, 'L');
        $this->Cell(50, 3, 'Email:Diaco@Diacodom.com.gt' , 0, 1, 'L');
        $this->Cell(50, 3, 'Tel:' .'4589-2612'. " Y " , 0, 1, 'L');
        $this->Cell(50, 3, 'NIT:' . '2005264-2', 0, 1, 'L');

        $this->Line(0, 35, 210, 35);
        $this->Ln(10);
    }

    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
    function CPdicta()
    {
        //cuerpo de la segunda Parte del dictamen
        $this->setFont('Courier', 'B', 9);
        $this->setX(20);
        $this->Cell(160, 5, utf8_decode("Queja No. (sustituir por datos bd):"));
        $this->ln();
        $this->setFont('Courier', 'B', 9);
        $this->setX(20);
        $this->MultiCell(160, 5, utf8_decode("Tipo de queja: (sustituir por datos db)"));
        $this->line(0, 52, 220, 52);
        $this->ln();
        $this->setFont('Courier', 'B', 9);
        $this->setX(20);
        // Datos del cliente 
        $this->setx(22);
        $this->setFont('Courier', '', 8);
        $this->cell(160, 5, utf8_decode("1)DATOS DEL SOLICITANTE:"));
        $this->ln();
        //NOMBRE COMPLETO
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->Cell(160, 5, utf8_decode("a)Nombre Completo:"));
        $this->ln();
        //EDAD
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->Cell(160, 5, utf8_decode("b)Edad:"));


        $this->ln();
        //NO IDENTIFICACION
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->Cell(160, 5, utf8_decode("c)No de Identificacion:"));
        $this->ln();
        //ESTADO CIVIL
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->Cell(160, 5, utf8_decode("d)Estado Civil"));
        $this->ln();
        //ORIGINARIO
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->Cell(160, 5, utf8_decode("e)Originario de:"));
        $this->ln();

        //RECIDENCIA ACTUAL
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->Cell(160, 5, utf8_decode("f)Residencia Actual:"));
        $this->ln();
        //PROFESION
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->Cell(160, 5, utf8_decode("g)Profesion:"));
        $this->ln();
        //TELEFONO
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->Cell(160, 5, utf8_decode("h)Telefono:"));
        $this->ln();
        //REF FAM
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->Cell(160, 5, utf8_decode("i)referencia Familiar:"));
        $this->ln();
        //REF COM
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->MultiCell(160, 5, utf8_decode("j)Referencia Comercial:"));
        
        //REF BANCA
        $this->setx(30);
        $this->setFont('Courier', '', 8);
        $this->Cell(160, 5, utf8_decode("k)Referencia Bancaria:"));
        $this->ln();
        //ID TRUBU
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 7, utf8_decode("2.IDENTIFICACION TRIBUTARIA:"));
        //dest cre
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 7, utf8_decode("3.DESTINO DE CREDITO:"));
        //mont prest
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 7, utf8_decode("4.MONTO DE PRESTAMO :"));
        //f DESEMB
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 8, utf8_decode("5.FORMA DE DESEMBOLSO:"));
        //f DE PAG
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 8, utf8_decode("6.FORMA DE PAGP:"));

        // T DE INTERES
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 8, utf8_decode("7.TASA DE INTERES:"));

        //PLZAO
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 7, utf8_decode("7.PLAZO:"));

        //GARANTIA
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 7, utf8_decode("8.GARANTIA:"));
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 7, utf8_decode("8.GARANTIA:"));
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 7, utf8_decode("8.GARANTIA:"));
        // COM DE FORMA
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 8, utf8_decode("9.COMISION DE FORMALIZACION:"));
        // COND GENERALES
        $this->setx(26);
        $this->setFont('Courier', '', 9);
        $this->MultiCell(160, 9, utf8_decode("10.CONDICIONES GENERALES: "));
        //enucniado 11
        $this->setx(26);
        $this->setFont('Courier', '', 8);
        $this->MultiCell(160, 5, utf8_decode("11. El atraso de una sola cuota ADEL IXCAN dar por plazo vencido el contrato, pagare o escritura y solicitara por la via correspondiente el pago immediato de los intereses convenidos. "));
        //enunciado 12
        $this->setx(26);
        $this->setFont('Courier', '', 8);
        $this->MultiCell(160, 5, utf8_decode("12. el pago del prestasmo se realizara en las oficinas de ADEL sin necesidad de cobro ni requerimiento alguno."));
        //enunciado 13
        $this->setx(26);
        $this->setFont('Courier', '', 8.5);
        $this->MultiCell(160, 5, utf8_decode("13. si el pago no se efecuara en la fecha convenida, ADEL realizara gestion de cobro y un recargo al monto de la cuota atrasada por un valor de Q. 100.00."));
        $this->ln();
        //enunciado 14
        $this->setx(26);
        $this->setFont('Courier', '', 8.5);
        $this->MultiCell(160, 5, utf8_decode("14.Recargo por mora, si llegara a retrasar los pagos se realizara un recargo por mora del 12% al monto vencido del prestamo y a los intereses no percibidos"));
        //enucniado 15
        $this->setx(26);
        $this->setFont('Courier', '', 8.5);
        $this->MultiCell(160, 5, utf8_decode("15. en base al anañisis efectuado a la señor/a (datos de bd) (deudor), posteriormente a la obtencion de la Informacion Finaciera, se comprobo que Diferencia entre los Ingresos y Egresos , arroja un saldo solvente determinandose el mismo que posee la capacidad sufuciente para cubrir mediante cuotas mensuales el credito que solicita."));
        //enucnuiado 16
        $this->setx(26);
        $this->setFont('Courier', '', 8.5);
        $this->MultiCell(160, 5, utf8_decode("16. Asimismo el financiamentio a obtener , sera reforzado mediante la Garantia fiduciaria solidara del señor/ra(insertar datos de la base de datos)(FIADOR) quien se mantndra vigente hasta la cancelacion total del financiamiento, quienes ademas, poseen la capacidad necesaria para cubrir cualquie saldo insoluto que dejare la normal recuperacion del mismo, tanto en Capital como en lo que representa los intereses"));
        //enunciado 17
        $this->setx(26);
        $this->setFont('Courier', '', 8.5);
        $this->MultiCell(160, 5, utf8_decode("17. se le aprueba la solucitud de crdito requerido, en virtud que dentro del reglamento(icfuefon) el mimo cumple con los requerimientos exigidos para ser beneficiario a traves del mismo, por lo que se elva al respectable comite de creditos para su aprobacion correspondiete."));
        //enunciado 18
        $this->setx(26);
        $this->setFont('Courier', '', 8.5);
        $this->MultiCell(160, 5, utf8_decode("18. en conclusion al analisis efectuado sobre la Informacion financiera Presentada por la empresaria/o(datos de la bd) se eleva la solicitud de prestamo al comite de creditios, en las condiciones siiguentes:"));
        $this->ln();
        //enucuado a-H
        $this->setx(28);
        $this->setFont('Courier', '', 8);
        $this->MultiCell(160, 5, utf8_decode("1-h). MONTO DEL FINANCIAMIENTO."));
        $this->ln();
        //enunciado b-h
        $this->setx(28);
        $this->setFont('Courier', '', 8);
        $this->MultiCell(160, 5, utf8_decode("2-h).TASA DE INTERES ."));
        $this->ln();
        //enuncuiadoc_H
        $this->setx(28);
        $this->setFont('Courier', '', 8);
        $this->MultiCell(160, 5, utf8_decode("3-h).PLAZO AUTORIZADO ."));
        $this->ln();
        //enunciado 19
        $this->setx(26);
        $this->setFont('Courier', '', 9.5);
        $this->MultiCell(160, 5, utf8_decode("19.Finaciamiento otorgese con recursos de fidecomiso fondo (datos bd) ."));
        $this->ln();
        $this->setX(30);
        $this->setFont('Courier', 'B', 9);
        $this->Cell(160, 8, utf8_decode("APROBADO POR"));
        $this->setX(70);
        $this->setFont('Courier', 'B', 9);
        $this->Cell(160, 8, utf8_decode("VISTO BUENO"));
        $this->ln(7);
        $this->setXY(30, 160);
        $this->setFont('Courier', 'B', 9);
        $this->Cell(160, 6, utf8_decode("ACESOR DE CREDITO"));

        $this->setXY(70, 160);
        $this->setFont('Courier', 'B', 9);
        $this->Cell(160, 6, utf8_decode("GERENCIA DE CREDITOS ADEL IXCAN"));
        $this->ln();
        //PAG2 END

       
        
        //modalidad
        //texto con datos a recuperar en base de datos
        $this->setX(20);
        $this->SetFont('Courier', 'B', 7);
        $this->MultiCell(160, 4, utf8_decode("FORMA DE ENTREGA:"));
        $this->setX(20);
        $this->setFont('Courier', '', 7);
        $this->MultiCell(160, 4, utf8_decode("Posteriormente firmado el respectivo contrato, parager o Escritura del prestamo a que se refiere la presente resolucion se procerdera de la siguente manera: "));
        $this->setX(20);
        $this->setFont('Courier', '', 7);
        $this->MultiCell(160, 4, utf8_decode("Directamente al solicitante en una sola entrega mendiante el documento legal de pago cheque a nombre de (sustituir por datos de base de datos) por la cantidas de (datos Bd) Con un TOTAL A DESEMBOLSAR DE (datos bd)"));
        $this->setX(20);
        $this->setFont('Courier', '', 7);
        $this->MultiCell(160, 6, utf8_decode("PLAZO: (datos bd)(plazo datos bd), Contados a partir de la fecha de desemblolsos del credito"));
        $this->SetX(20);
        $this->SetFont('Courier', 'B');
        $this->MultiCell(160, 4, utf8_decode("TASA DE INTERES:"));
        $this->setX(20);
        $this->setFont('Courier', '', 7);
        $this->MultiCell(160, 4, utf8_decode("RECARGO DE MORA: De no canselarse los intereses en la fecha señalada, la agencia de Desarollo Economico de Ixcan, Cobrara un Recargo anual sobre los intereses vencidos del 12% sobre la tasa vigente, los cuales deberan computarse a partir del primer dia respectivo del vencimiento"));
        $this->ln();
        $this->setX(20);
        $this->setFont('Courier', '', 7);
        $this->MultiCell(160, 4, utf8_decode("FORMA DE RECUPERACION: (THISFO)(CUOTAS+INFORMAS) Que incluyen el capital e intereses por (incuota ) cada una ,a partir de la fecha de desembolsa de los fondos del credito"));
        $this->setX(20);
        $this->ln();
        $this->setX(20);
        $this->setFont('Courier', '', 7);
        $this->MultiCell(160, 4, utf8_decode("COMISION DE FORMALIZACION: (datos db)% sobre el monto del prestamo a que se refiere la presente resolucion"));
        $this->ln();
        $this->setX(20);
        $this->setFont('Courier', 'B', 7);
        $this->MultiCell(160, 4, utf8_decode("OTRAS CONDICIONES: "));
        $this->setX(20);
        $this->setFont('Courier', '', 7);
        $this->MultiCell(160, 4, utf8_decode("a): El solicitante se compromete a presentar cualquier otra informacion que ADEL IXCAN, requiera (contable, finaciera, administartiva, social o legal) cuando las inspeciiones de campo y se verifique la correcta ibersion de los fondos deacuerdo al destino indicado. "));

        $this->setX(20);
        $this->setFont('Courier', '', 7);
        $this->MultiCell(160, 3, utf8_decode("b) La presente resolucion tendria un plazo de SESETA DIAS (60) habiles para la formalizacion contados apartir de la fecha de notificacion al solicitante         
        Playa Grande , Ixcan , El Quiche, (recupere deatos de la base de datos )"));
        //aqui estan las firmas respetctivas del diactamen
        $this->setX(20);
        $this->Line(20, 280, 65, 280);
        $this->setX(25);
        $this->setFont('Courier', 'B', 7);
        $this->Cell(160, 6, utf8_decode("Presidente"));
        $this->Line(70, 280, 115, 280);
        $this->setX(75);
        $this->setFont('Courier', 'B', 7);
        $this->Cell(160, 6, utf8_decode("Secretario"));
        $this->Line(120, 280, 165, 280);
        $this->setX(125);
        $this->setFont('Courier', 'B', 7);
        $this->Cell(160, 6, utf8_decode("Vocal"));
        $this->ln();
        //Aqui cierra la parte de la tercera Hoja S    
    }
}


//aggregar las funcionesque seran pertinentes para la gebneracion de el cofdigo a emplearse de manera eficionete y corrrencta
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Courier', 'B', 16);
$pdf->CPdicta();
$pdf->Output();
