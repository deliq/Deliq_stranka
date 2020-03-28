<!DOCTYPE html>
<html>
   <head>
      <title>iron-dropdown</title>
      <base href = "http://polygit.org/components/">
      <script src = "webcomponentsjs/webcomponents-lite.min.js"></script>
      <link rel = "import" href = "iron-dropdown/demo/x-select.html">
      <link rel = "import" href = "paper-input/paper-input.html">
      <link rel = "import" href = "paper-button/paper-button.html">
  
      <style>
         .dropdown-trigger{
            background-color: DarkCyan ;
            border-radius: 4px;
            color: white;
         }
         .dropdown-content {
            background-color: white;
            line-height: 15px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px #ccc;
            padding: 20px;
         }
      </style>
   </head>
  
   <body>
      <h3>Iron-dropdown Example</h3>
      <x-select>
         <paper-button class = "dropdown-trigger">Click Me !</paper-button>
         <div class = "dropdown-content">
            <p>Hello !!! <br/>
            <p>This is an iron-dropdown <br/> example of Polymerjs.</p>
         </div>
      </x-select>
   </body>
</html>
