<?php
namespace App\Http\Raquest;

use Illuminate\Httpt\Request;
use Illuminate\Support\Facades\Storage;

class SubirControlador extends Controller {
    //es una pagina para que parezca que esta en img peor no esta en img
    function img(Request $request, $file) {
        if(file_exists(storage_path('app/private/carpeta') . $file)){
        return response()->file(storage_path('app/private/carpeta') . $file);
        }
        abort(404);
    }

    function index(){
        return view('subir.index');
    }

    function subir(Request $request) {
        //dd($request->file('file'));/*me muestra la informacion que envio, el segundo file es el name:"" que hemos puesto en el index.blade.php*/
        if($request->hasFile('file') && $request->file('file')->isValid()){//si hay archivo y por lo tanto es valido lo guardo
            $file = $request->file('file');
            $nombreOriginal=  $file->getClientOriginalName();//lo gaurda con el nombre que tiene el archivo original
            /*VIP*/$path = $file->storeAs('carpeta', 'nueva_' . '$nombreOriginal');//Lo guarda en la carpeta carpeta en store/private con el nombre original
            //$path = Storage::putFileAs('carpeta', $file, $nombreOriginal);//equivalente
            echo $path;
        }
    }

    function subir2(Request $request) {
        //dd($request->file('file'));/*me muestra la informacion que envio, el segundo file es el name:"" que hemos puesto en el index.blade.php*/
        if($request->hasFile('file') && $request->file('file')->isValid()){//si hay archivo y por lo tanto es valido lo guardo
            $file = $request->file('file');
            //$nombreOriginal=  $file->getClientOriginalName();//lo gaurda con el nombre que tiene el archivo original
            /*VIP*/ $path = $file->store('carpeta', 'public');//Nunca se sube un archivo con el nombre original. Te lo guarda en --public---carpeta con un nombre nuevo cifrado.
            //$path = Storage::putFile('carpeta', $file);//equivalente
            echo $path;
        }
    }




    function subir1(Request $request) {
        //dd($request->file('file'));/*me muestra la informacion que envio, el segundo file es el name:"" que hemos puesto en el index.blade.php*/
        if($request->hasFile('file') && $request->file('file')->isValid()){//si hay archivo y por lo tanto es valido lo guardo
            $file = $request->file('file');
            $nombreOriginal=  $file->getClientOriginalName();//lo gaurda con el nombre que tiene el archivo original
            $path = $file->move('storage.carpeta', $nombreOriginal); //guardalo en tal sitio . dondo estoy, con el nombre original
            echo $path; //me devuelve la ruta y el nombre del archivo
        }
    }

    function view() {
        return view('subir.view');
    }

}



