
<script src="<?php echo $this->request->webroot . "js/" ?>tinymce.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<?php echo $this->Form->create("Article"); ?>
<fieldset>
    <h2>Add Articles</h2>
    <?php
    echo $this->Form->input("Title");
    echo $this->Form->input("MapUrl");
    echo $this->Form->input("Type");
    echo $this->Form->input("MetaDes", array("id" => "des_meta"));
    echo $this->Form->input("MetaKey", array("id" => "keys"));
    echo $this->Form->input("Description", array("id" => "description"));
//    echo $this->Form->input("File", array("type" => "file", "id" => "file"));
    echo $this->Form->input("Content", array("type" => "textarea", "id" => "content_article"));
    echo $this->Form->button('Submit');
    ?>
</fieldset>
<?php
echo $this->Form->end();
?>
<script>
    tinymce.init({
        selector: '#content_article',
        height: 500,
        plugins: [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern borderinsert"
        ],
        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect border_insert",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | visualchars visualblocks nonbreaking template pagebreak restoredraft",
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'],
        menubar: false,
        toolbar_items_size: 'small',
        style_formats: [{
                title: 'Bold text',
                inline: 'b'
            }, {
                title: 'Red text',
                inline: 'span',
                styles: {
                    color: '#ff0000'
                }
            }, {
                title: 'Red header',
                block: 'h1',
                styles: {
                    color: '#ff0000'
                }
            }, {
                title: 'Example 1',
                inline: 'span',
                classes: 'example1'
            }, {
                title: 'Example 2',
                inline: 'span',
                classes: 'example2'
            }, {
                title: 'Table styles'
            }, {
                title: 'Table row 1',
                selector: 'tr',
                classes: 'tablerow1'
            }],
        templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            }, {
                title: 'Test template 2',
                content: 'Test 2'
            }],
        init_instance_callback: function () {
            window.setTimeout(function () {
                $("#div").show();
            }, 1000);
        }
    });
    tinymce.PluginManager.add('borderinsert', function (editor, url) {
        editor.addButton('border_insert', {
            text: 'Border',
            icon: false,
            onclick: function () {
                var text_selected = editor.selection.getContent();
                var text_modified = "<span style='border: 1px solid #0186D1; padding: 1pt 2pt;'>" + text_selected + "</span>";
                editor.selection.setContent(text_modified);
            }
        });
    });

</script>
