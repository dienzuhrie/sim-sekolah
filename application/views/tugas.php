<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/decoupled-document/ckeditor.js"></script>
</head>
<body>
<h1>Tugas - </h1>

<!-- The toolbar will be rendered in this container. -->
<div id="toolbar-container"></div>

<!-- This container will become the editable. -->
<div id="editor">
	<p>This is the initial editor content.</p>
</div>

<script>
	DecoupledEditor
		.create( document.querySelector( '#editor' ) )
		.then( editor => {
			const toolbarContainer = document.querySelector( '#toolbar-container' );

			toolbarContainer.appendChild( editor.ui.view.toolbar.element );
		} )
		.catch( error => {
			console.error( error );
		} );
</script>
</body>
</html>