<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductModel
;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ProductsExport;

class ProductController extends Controller
{
	public function product_index(Request $request)
	{
		$data['meta_title'] = 'Product List';
		return view('backend.product.list', $data);	
	}


	public function product_store(Request $request){
		
		// dd(request()->all());

		$recoder = new ProductModel;
		$recoder->recipient = $request->input('recipient');
		$recoder->message   = $request->input('message');
		$recoder->save();  

		  $json['success'] = 'Data created Successfully!';
          echo json_encode($json);

		// $inser_r = new ProductModel;
		// $inser_r->recipient  = trim($request->recipient);
  //       $inser_r->message      = trim($request->message);
  //       $inser_r->save();

  //       $success_output = '<div class="alert alert-success">Data Inserted</div>';

  //       $output = array(
  //       	'success'   =>  $success_output
  //       );
  //       echo json_encode($output);
	}

	public function index_show(){
		$userData = ProductModel::get();
		$html = '';
		foreach($userData as $value){
			$html .= '<tr>
				<td>'.$value->id.'</td>
				<td>'.$value->recipient.'</td>
				<td>'.$value->message.'</td>
				<td>
				<a href="#" class="btn btn-success viewrecord" id="'.$value->id.'">View</a>
				<a href="#" class="btn btn-primary editrecord" id="'.$value->id.'">Edit</a>
				<a href="#" class="btn btn-danger deleterecord" id="'.$value->id.'">Delete</a>
				</td>
			</tr>';
		}
		return json_encode(array('html'=>$html));
	}


	public function edit_show(Request $request){
		$id = $request->input('id');
		$getData = ProductModel::find($id);
		$output = array(
			'recipient' => $getData->recipient,
			'message'   =>  $getData->message
		);
		echo json_encode($output);
	}


	public function update_show(Request $request){
		$recoder          = ProductModel::find($request->input('edit_id'));
    	$recoder->recipient    = $request->input('edit_name');
    	$recoder->message = $request->input('edit_address');
    	$recoder->save();
    	$json['success'] = 'Data Update Successfully!';
    	echo json_encode($json);
	}

	public function view_show(Request $request){
		$id = $request->input('id');
		$getDataView = ProductModel::find($id);
		$output = array(
			'recipient' => $getDataView->recipient,
			'message'   => $getDataView->message
		);
		echo json_encode($output);
	}

	// Delete

	public function delete_record($id){
		// echo $id;
		// die();
		$DeleteUser = ProductModel::find($id);
		$DeleteUser->delete($id);
		$json['success'] = 'Data Delete Successfully.';
		echo json_encode($json);
	}


	public function product_excel_import(Request $request){
		$data['meta_title'] = 'Product Excel Import';
		return view('backend.product.excel_import', $data);

	}

// https://www.itsolutionstuff.com/post/laravel-57-import-export-excel-to-database-exampleexample.html 

 // composer require maatwebsite/excel 

	public function product_excel_store(Request $request){
		  // $file  = $request->file('file');
    //    dd($file);
        $file  = $request->file('file')->store('import');
       
       //dd($file);
        (new ProductsImport)->import($file);
        //Excel::import(new ProductsImport, $file);

        return redirect()->back()->with('success',"Record successfully register.");
	}



	public function product_excel_export() 
    {

        return Excel::download(new ProductsExport, 'users.xlsx');

    }

}

?>