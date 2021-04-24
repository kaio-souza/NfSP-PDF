<?php

namespace NfSPPDF;

class NfSPPDF
{
    public static function getNfPdf($nfNumber, $imProvider, $verificationCode)
    {
        $body = self::getNotaHtml($imProvider, $nfNumber, $verificationCode);
        $dompdf = new Dompdf(array('enable_remote' => true));
        $dompdf->loadHtml($body);
        $dompdf->setPaper('A4', "portrail");
        $dompdf->render();
        return $dompdf->output();
    }

    public static function getNfHtml($imProvider, $nfNumber, $verificationCode)
    {
        $uri = self::getPreviewLink($imProvider, $nfNumber, $verificationCode);
        return "<html><body><img style=\"max-width: 100%\" src=\"{$uri}\" /></body></html>";
    }

    private static function getPreviewLink($nfNumber, $imProvider, $verificationCode)
    {
        return "https://nfe.prefeitura.sp.gov.br/contribuinte/notaprintimg.aspx?inscricao={$imProvider}&amp;nf={$nfNumber}&amp;verificacao={$verificationCode}&amp;imprimir=1";
    }
}