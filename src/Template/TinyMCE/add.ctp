
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<textarea id="my_editor"></textarea>
<iframe id="form_target" name="form_target" style="display:none"></iframe>
    <?php
    echo $this->Form->create("Upload", array("id" => "my_form", "target" => "form_target", "method" => "post", "enctype" => "multipart/form-data", "style" => "width:0px;height:0;overflow:hidden"));
    echo $this->Form->input("file", array("type" => "file", "onchange" => "$('#my_form').submit();"));
    echo $this->Form->end();
    ?>
<!--<form id="my_form" action="/upload/add" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
    <input name="image" type="file" onchange="$('#my_form').submit();">
</form>-->

<script>
    tinymce.init({
        selector: '#my_editor',
        plugins: ["image"],
        // example 
        file_browser_callback: function (field_name, url, type, win) {
            if (type == "image") {
                $('#my_form input').click();
                win.document.getElementById(field_name).value = 'data/kakacamera.jpg';
            }
        }
    });

</script>
