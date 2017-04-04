<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use JasperPHP\JasperPHP;
use App\Customer;
class ReportController extends Controller
{
/**
     * Reporna um array com os parametros de conexão
     * @return Array
     */
 public function getDatabaseConfig()
    {
        return [
            'driver'   => env('DB_CONNECTION'),
            'host'     => env('DB_HOST'),
            'port'     => env('DB_PORT'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'database' => env('DB_DATABASE'),
            'jdbc_dir' => base_path() . env('JDBC_DIR', '/vendor/lavela/phpjasper/src/JasperStarter/jdbc'),
        ];
    }
public function index()
    {
     // coloca na variavel o caminho do novo relatório que será gerado
        $output = public_path() . '/reports/' . time() . '_Imoveis';
// instancia um novo objeto JasperPHP
         
        $report = new JasperPHP;
// chama o método que irá gerar o relatório
        // passamos por parametro:
        // o arquivo do relatório com seu caminho completo
        // o nome do arquivo que será gerado
        // o tipo de saída
        // parametros ( nesse caso não tem nenhum)         
        $report->process(
            public_path() . '/reports/Imoveis.jrxml',
            $output,
            ['pdf'],
            [],
            $this->getDatabaseConfig()
        )->execute();
$file = $output . '.pdf';
        $path = $file;
        
        // caso o arquivo não tenha sido gerado retorno um erro 404
        if (!file_exists($file)) {
            abort(404);
        }
//caso tenha sido gerado pego o conteudo
        $file = file_get_contents($file);
//deleto o arquivo gerado, pois iremos mandar o conteudo para o navegador
        unlink($path);
// retornamos o conteudo para o navegador que íra abrir o PDF
        return response($file, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="cliente.pdf"');
     
    }
}