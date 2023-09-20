<html>
<head>
    <title>Laravel Multiple Select Dropdown with Checkbox </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 400px !important;
        }
          </style>
          </head>
           <body>
           <div class="container">
              <div class="row">
                <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">List of entries</h6>
                    </div>
                    <div class="card-body">
					<a href="{{ route('create') }}">create User</a>
                        <ul>
		          @foreach ($todos as $todo)
		           <li>
                    <p><strong>Name:</strong> {{ $todo->name }}</p>
                     <p><strong>Description:</strong> {{ $todo->description }}</p>
                     <p><strong>Skills:</strong> {{ implode(', ', json_decode($todo->cat)) }}</p>
		             </li>
		            @endforeach
		              </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
  
<!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
  
</html>