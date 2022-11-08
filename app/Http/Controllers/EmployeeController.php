<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // set index page view
	public function index() {
		return view('admin.index');
	}

	// handle fetch all eamployees ajax request
	public function fetchAll() {
		$emps = Employee::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Capa</th>
                <th>Titulo</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>
                <td><a href="storage/images/' . $emp->image_path . '" target="_blank"><img src="storage/images/' . $emp->image_path . '" width="50" class="img-thumbnail rounded-circle"></a></td>
                <td>' . $emp->title . ' ' . $emp->title . '</td>
         
                <td>
                  <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}

	// handle insert a new employee ajax request
	public function store(Request $request) {
		$file = $request->file('image_path');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/images', $fileName);

		$title = $request->input('title');
        $slug = strtolower( preg_replace("[^a-zA-Z0-9-]", "-", strtr(utf8_decode(trim($title)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),"aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
        $slug = preg_replace('/[ -]+/' , '-' , $slug);
		$slug = preg_replace('?' , '' , $slug);

		$empData = ['title' => $request->title, 'slug' => $slug, 'description' => $request->description,'image_path' => $fileName];
		Employee::create($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle edit an employee ajax request
	public function edit(Request $request) {
		$id = $request->id;
		$emp = Employee::find($id);
		return response()->json($emp);
	}

	// handle update an employee ajax request
	public function update(Request $request) {
		$fileName = '';
		$emp = Employee::find($request->emp_id);
		if ($request->hasFile('image_path')) {
			$file = $request->file('image_path');
			$fileName = time() . '.' . $file->getClientOriginalExtension();
			$file->storeAs('public/images', $fileName);
			if ($emp->image_path) {
				Storage::delete('public/images/' . $emp->image_path);
			}
		} else {
			$fileName = $request->emp_image_path;
		}

		$empData = ['title' => $request->title, 'description' => $request->description, 'image_path' => $fileName];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}

// handle delete an employee ajax request
public function delete(Request $request) {
	$id = $request->id;
	$emp = Employee::find($id);
	if (Storage::delete('public/images/' . $emp->image_path)) {
		Employee::destroy($id);
	}
}
}