<div class="footer">
            <div class="container">
                <ul class="agileits_w3layouts_footer_info">
                    <li><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "index"]) ?>">Home</a></li>
                   <?php foreach ($listType as $rowType): ?>
                                <li>
                                <i>|</i><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "detail", $rowType->type]) ?>">
                                    <?php echo $rowType->type; ?></a></li>
                        <?php endforeach;
                        ?>
                </ul>
                <p>© 2017  | Design by <a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "index"]) ?>">Codewr</a></p>
            </div>
        </div>
        <!-- //footer -->
        

    </body>
</html>