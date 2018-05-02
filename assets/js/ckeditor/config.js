/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
config.filebrowserBrowseUrl = '../assets/js/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = '../assets/js/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = '../assets/js/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = '../assets/js/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = '../assets/js/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = '../assets/js/kcfinder/upload.php?opener=ckeditor&type=flash';
   
 /*filebrowserBrowseUrl : '/assets/js/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '/assets/js/ckfinder/ckfinder.html?Type=Images',
    filebrowserFlashBrowseUrl : '/assets/js/ckfinder/ckfinder.html?Type=Flash',
    filebrowserUploadUrl : '/assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '/assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '/assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'*/
	//extraPlugins: 'imageuploader'
	config.extraPlugins = 'uploadfile';
	//config.extraPlugins = 'imageuploader';
	config.toolbarGroups = [
        { name: 'clipboard', groups: [ 'undo', 'clipboard' ] },
        { name: 'styles', groups: [ 'styles' ] },
        { name: 'basicstyles', groups: [ 'FontSize', 'cleanup', 'basicstyles' ] },
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
        { name: 'colors', groups: [ 'colors' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
        { name: 'links', groups: [ 'links' ] },
        { name: 'insert', groups: [ 'insert' ] },
        { name: 'forms', groups: [ 'forms' ] },
        { name: 'tools', groups: [ 'tools' ] },
        { name: 'document', groups: [ 'document', 'doctools', 'mode' ] },
        { name: 'others', groups: [ 'others' ] },
        { name: 'about', groups: [ 'about' ] }
    ];
	
	
	
	
};
