<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Guess Game</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
              
              
        <script
          src="https://code.jquery.com/jquery-3.6.0.js"
          integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
          crossorigin="anonymous"></script>


<link rel="stylesheet"
	href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{
                line-height:1.15;-webkit-text-size-adjust:100%
            }body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body, html {
                font-family: 'Nunito', sans-serif;
                height:100%;
            }
            input{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <div class="main-section h-100">
    	<div class="container mt-6 h-100">
    		<div class="row justify-content-center align-items-center h-100">
    			<div class="col-lg-12">
    				<div class="shadow p-1">
    				
    				
    				<table class="table table-hover table-vcenter enableDataTable">
                        <thead>
                            <tr>
                              <th scope="col">Game ID</th>
                              <th scope="col">Move Number</th>
                              <th scope="col">Guess Value</th>
                              <th scope="col">Generated Value</th>
                              <th scope="col">Computer Answer</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
            <tr>
              
                <th scope="col">Game ID</th>
                              <th scope="col">Move Number</th>
                              <th scope="col">Guess Value</th>
                              <th scope="col">Generated Value</th>
                              <th scope="col">Computer Answer</th>
            </tr>
        </tfoot>
                    </table>
    					 
<!--     					 <table class="table table-striped table-dark table-responsive "> -->
<!--                           <thead> -->
<!--                             <tr> -->
<!--                               <th scope="col">Game ID</th> -->
<!--                               <th scope="col">Move Number</th> -->
<!--                               <th scope="col">Guess Value</th> -->
<!--                               <th scope="col">Generated Value</th> -->
<!--                               <th scope="col">Computer Answer</th> -->
<!--                             </tr> -->
<!--                           </thead> -->
<!--                           <tbody> -->
<!--                           		<tr> -->
<!--                           		<form action="{{ route('post.history') }}" method="post" id="game-filter"> -->
<!--                           		@csrf -->
<!--                                   <th> <input type="text" placeholder="Game ID" name="game_id" > </th> -->
<!--                                   <th> <input type="text" placeholder="Move Number" name="move_number" > </th> -->
<!--                                   <th> <input type="text" placeholder="Guess Number" name="guess_value" > </th> -->
<!--                                   <th> <input type="text" placeholder="Generated Value" name="generated_value" > </th> -->
<!--                                   <th> <input type="text" placeholder="Computer Answer" name="computer_answer" > </th> -->
<!--                                   </form> -->
<!--                                 </tr> -->
<!--                           	@foreach($models as $model) -->
<!--                                 <tr> -->
<!--                                   <th scope="row">{{ $model->game_id }}</th> -->
<!--                                   <td>{{ $model->move_number }}</td> -->
<!--                                   <td>{{ $model->guess_value }}</td> -->
<!--                                   <td>{{ $model->generated_value }}</td> -->
<!--                                   <td>{{ $model->computer_answer }}</td> -->
<!--                                 </tr> -->
<!--                             @endforeach -->
<!--                           </tbody> -->
<!--                         </table> -->
<!--                         @ if($models->isNotEmpty()) -->
<!--     					 	{ { $models->links() }} -->
<!--     					@ endif -->
                        
           
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
            
    </body>
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js"></script>
    <script>

	
    $(document).ready(function() {
    	 var table = $('.enableDataTable').DataTable({
     		  processing: true,
             serverSide: true,
             fixedColumns:   true,
             ajax: '/history',
             columns: [
                 { data: 'game_id', name: 'game_id', orderable: false },
                 { data: 'move_number', name: 'move_number', orderable: false },
                 { data: 'guess_value', name: 'guess_value', orderable: false },
                 { data: 'generated_value', name: 'generated_value', orderable: false },
                 { data: 'computer_answer', name: 'computer_answer', orderable: false },
              ],

              "initComplete": function () {
                       this.api().columns().every(function () {
           	        var column = this;
           	        var input = document.createElement("input");
           	     	
           	        $(input).appendTo($(column.footer()).empty()).on('change', function () {
	           	       column.search($(this).val(), false, false,true).draw();
           	        });
           	    });

           	}  
         });
     });











    

     var nameLoop=[];
     $(document).ready(function(){
    	var arr=$("#game-filter").serializeArray();
    	arr.map(item=>{
             // console.log(item);  
              nameLoop.push(item.name);    
        }); 
    	var obj ={};

    	 for(var i=0;i<nameLoop.length;i++){

          $(`input[name=${nameLoop[i]}]`).on('change',function(e){
                e.preventDefault();
     			var form = $(this);
     			var name=$(this).attr('name');
                
     			obj[name]=$(this).val();

     			for(var key in obj){
     				if(!obj[key]){
                      delete obj[key];
         		   }
     			} 			

     			
     			var url = form.attr('action');
     			$.ajax({
     				headers: {
     			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     			    },
     				url: url,
     				type: "post",
     		        data: obj,
     		        success: function (data) {
     			       console.log('error', data);
     		           if(data.error == false){
     						//alert(data.data.message);
     			       }
     		        },
     		        error: function (xhr, exception) {
     		            var msg = xhr.responseText;
     		            //alert(msg);
     		        }
     			})
     		})
         }


   });


     
       
    
	
    </script>
</html>
