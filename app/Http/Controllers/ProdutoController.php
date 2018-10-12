<?php namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;	
use Request;
use Validator;
use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutosRequest;
use Auth;

class ProdutoController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth',
		['only' => ['adiciona', 'remove']]);
	}

	public function lista(){

		$produtos = Produto::all();

		return view('produtos.listagem')->with('produtos', $produtos);
	}

    public function mostra($id){

        $produtos = Produto::find($id);

        if(empty($produtos)) {
            return "Esse produto não existe";
        }
        return view('produtos.detalhes')->with('p', $produtos);
    }

	public function remove($id){
		
	    $produtos = Produto::find($id);
	    $produtos->delete();
	    
	    return redirect()
	        ->action('ProdutoController@lista');
	}


    public function novo(){
        return view('produtos.formulario')->with('categorias', Categoria::all());
    }

	public function adiciona(ProdutosRequest $request){



	  Produto::create($request->all());

	  return redirect()
	    ->action('ProdutoController@lista')
	    ->withInput($request->only('nome'));
		}
}	