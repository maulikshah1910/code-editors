<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Practice Arena</title>

    <link rel="stylesheet" href="{!! asset('front/css/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('front/css/bootstrap-grid.min.css') !!}" />

</head>
<body>

    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-md-6 border-end p-3 overflow-auto">
                <h1> Your problem statement shall appear here... </h1>
                
            </div>
            
            <!-- Right: Code Editor + Results -->
            <div class="col-md-6 d-flex flex-column p-0">
                <!-- Editor Section -->
                <div class="p-3 border-bottom flex-grow-1">
                    <div class="d-flex align-items-center mb-2">
                        <label for="language" class="me-2 fw-bold">Language:</label>
                        <select name="language" id="language" class="form-select w-auto">
                            <option value="python">Python</option>
                            <option value="cpp">C++</option>
                            <option value="java">Java</option>
                            <option value="sql">SQL</option>
                            <option value="php">PHP</option>
                        </select>
                        <button id="runBtn" class="btn btn-primary ms-3">Run</button>
                    </div>

                    <!-- Code editor placeholder -->
                    <div id="editor" class="border rounded bg-light" style="height:300px;"></div>
                </div>

                <!-- Results Section -->
                <div class="p-3 flex-grow-1 overflow-auto">
                    <h5>Results</h5>
                    <div id="results" class="border rounded p-2 bg-light" style="min-height:100px;">
                    <!-- Execution results will be displayed here -->
                    </div>

                </div>
                
                <!-- Custom Test Cases -->
                <div class="mt-4">
                    <h6>Add Custom Test Case</h6>
                    <div class="mb-2">
                        <textarea id="customInput" class="form-control" rows="2" placeholder="Input"></textarea>
                    </div>
                    <div class="mb-2">
                        <textarea id="customOutput" class="form-control" rows="2" placeholder="Expected Output"></textarea>
                    </div>
                    <button id="customBtn" class="btn btn-success">Run Custom</button>
                </div>

            </div>


        </div>
    </div>


    <script src="{!! asset('front/js/bootstrap.min.js') !!}" type="javascript"></script>
    <script src="{!! asset('front/js/bootstrap.bundle.min.js') !!}" type="javascript"></script>
</body>
</html>