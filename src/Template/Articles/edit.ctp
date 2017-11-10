<script src="<?php echo $this->request->webroot . "js/" ?>tinymce.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<?php echo $this->Form->create("Article",array('url'=>'/articles/edit/'.$id)); ?>
<fieldset>
    <h2>Add Articles</h2>
    <?php
    echo $this->Form->input("Title",['value'=>$title]);
    echo $this->Form->input("MapUrl",['value'=>$mapUrl]);
    echo $this->Form->input("Type",['value'=>$type]);
    echo $this->Form->input("MetaDes", ['value'=>$meta_des]);
    echo $this->Form->input("MetaKey",['value'=>$meta_keys]);
    echo $this->Form->input("Description", ['value'=>$des_article]);
    echo $this->Form->input("Content", array("type" => "textarea", "id" => "content_article",'value'=>$content));
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
        
        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
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

</script>