<script src="<?php echo $this->request->webroot . "js/" ?>tinymce.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<?php echo $this->Form->create("Upload", array("type" => "file")); ?>
<fieldset>
    <h2>Add Articles</h2>
    <?php
    echo $this->Form->input("Title");
    echo $this->Form->input("MapUrl");
    echo $this->Form->input("Type");
    echo $this->Form->input("MetaDes", array("id" => "des_meta"));
    echo $this->Form->input("MetaKey", array("id" => "keys"));
    echo $this->Form->input("Description", array("id" => "description"));
    echo $this->Form->input("File", array("type" => "file", "id" => "file"));
    echo $this->Form->input("Content", array("type" => "textarea", "id" => "content_article"));
    echo $this->Form->button('Submit');
    ?>
</fieldset>
    <?php
    echo $this->Form->end();
    ?>
<script>
    tinymce.init({
        selector: '#content_article'
    });

</script>