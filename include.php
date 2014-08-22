<?php
$LL = array();
function L($s)
{
	global $LL;
	return (isset($LL[$s]) ? $LL[$s] : str_replace('_',' ',$s));
}
?>

// load Stylesheet IE/other
if (document.createStyleSheet){ document.createStyleSheet('wizards/rte/css/jquery.juirte.css') }
else {$('head').append( $("<link rel='stylesheet' href='wizards/rte/css/jquery.juirte.css' type='text/css' media='screen' />")) }


// ATTENTION! changes was made in jquery.juirte.js! search for "chris" //////////////////////////////////////


// callee
(function( $ ) {
	$.fn.rte = function()
	{
		// buttons
		var butts = [
					'bold', 'italic', 'underline', 'strikeThrough',
					'spacer','heading', 'fonts', 'fontSize',
					'spacer','removeFormat',
					'spacer', 'insertImage', 'createlink','unlink',
					'row', 'html',
					'spacer','backColor', 'forecolor',
					'spacer', 'justifyCenter', 'justifyFull', 'justifyLeft', 'justifyRight',
					'spacer', 'insertHorizontalRule',
					'spacer', 'insertOrderedList', 'insertUnorderedList',
					'spacer','indent', 'outdent', 'superscript', 'subscript'
				];
		if(this.data('buttons')) butts = this.data('buttons').split(',');
		
		var n = this.attr('name');
		
		this.before('<br style="clear:both" />').juirte(
		{
			width: '98%', 
			height: '250px',
			buttons: butts,
			language: [['html', '<?php echo L('Toggle HTML')?>'],['insertimage', '<?php echo L('Insert Image')?>'],['inserturl', '<?php echo L('Insert URL')?>'],['paragraph', '<?php echo L('Paragraph')?>'],['address', '<?php echo L('Address')?>'],['heading', '<?php echo L('Heading')?>'],['bgcolor', '<?php echo L('Background Color')?>'],['fontcolor', '<?php echo L('Font Color')?>'],['fontsize', '<?php echo L('Font Size')?>'],['font', '<?php echo L('Font')?>'],['paragraph', '<?php echo L('Paragraph')?>'],['link', '<?php echo L('Link')?>'],['removelink', '<?php echo L('Remove Link')?>'],['italic', '<?php echo L('Italic')?>'],['bold', '<?php echo L('Bold')?>'],['underline', '<?php echo L('Underline')?>'],['strike', '<?php echo L('Strike')?>'],['hr', '<?php echo L('Horizontal Rule')?>'],['ol', '<?php echo L('Ordered List')?>'],['ul', '<?php echo L('Unordered List')?>'],['center', '<?php echo L('Center')?>'],['left', '<?php echo L('Left')?>'],['full', '<?php echo L('Full')?>'],['right', '<?php echo L('Right')?>'],['indent', '<?php echo L('Indent')?>'],['outdent', '<?php echo L('Outdent')?>'],['superscript', '<?php echo L('Superscript')?>'],['subscript', '<?php echo L('Subscript')?>'],['rm', '<?php echo L('Remove Formating')?>']],
			stylesheet: '../vendor/cmskit/jquery-ui/themes/'+settings.interface.theme[settings.interface.theme.length-1]+'/jquery-ui.css'
		});
	};
})( jQuery );


var rteSrcAdd = '../projects/'+projectName+'/';
var rteSrcReplace = new RegExp(rteSrcAdd, 'g');

// external Helper to add Image selected/called from Filemanager (see  jquery.juirte.js l. 721)
function addImgToRte(p) {
	actCommand('insertImage', rteSrcAdd+p);
	actRTE.dialog('close');
}

<?php
echo file_get_contents('js/jquery.juirte.js');
?>
