# NfSP-PDF
Lib simples para gerar PDF's das Notas Fiscais (NFs) da Prefeitura do Estado de São Paulo

## Instalando a Lib pelo composer 
```
    composer require notafiscalsp/notafiscal-pdf
``` 

## getNfHtml
Para gerar o HTML da nota os parametros são: NUMERO DA NOTA, INSCRIÇÃO MUNICIPAL DO PRESTADOR e CÓDIGO DE VERIFIAÇÃO
```php
    use NfSPPDF\NfSPPDF;

    $file = NfSPPDF::getNfHtml('0265489', '44545455', 'S2A2D54');
    echo $file;
```

## getNfPdf
Para gerar o PDF da nota os parametros são os mesmos: NUMERO DA NOTA, INSCRIÇÃO MUNICIPAL DO PRESTADOR e CÓDIGO DE VERIFIAÇÃO

```php
    use NfSPPDF\NfSPPDF;

    $file = NfSPPDF::getNfHtml('0265489', '44545455', 'S2A2D54');
    file_put_contents('/path/to/storage/lala.pdf', $file);
```