<?php
    
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;

    
    class CuentasController extends Controller
    {

        protected static $apisita = "http://localhost/apilaravel/api.php";

        public function index()
        {
            return view('vistas.template');
        }

        public function show(Request $request)
        {
            $cuenta = Http::asForm()->get(static::$apisita ,[
                'NRO_CUE' => $request->input('NRO_CUE')
            ])->json();

            return view('vistas.datos', compact('cuenta'));
        }
        
    }

?>