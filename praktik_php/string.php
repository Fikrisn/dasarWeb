<?php
    $loremIpsum = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate fugiat reiciendis accusantium eligendi voluptatem exercitationem vel temporibus! Vitae magnam totam cupiditate ab, ipsa optio perferendis consequuntur quos suscipit vel cum iste? Quaerat error ab officia, eaque provident exercitationem minus soluta laudantium ipsa. Molestiae est blanditiis et. Ipsam est soluta tempora exercitationem. Amet soluta delectus architecto voluptas quos, fuga pariatur hic eius aliquam nihil sed aut dolor possimus veniam suscipit! Hic dolore tempora, deleniti vel earum repellat eligendi pariatur aliquid. Est ratione veniam minima voluptates possimus in quis? Blanditiis omnis culpa soluta laudantium, nihil eaque fuga recusandae eos quas cumque deserunt harum, quam obcaecati eum? Sapiente.";

    echo "<P>{$loremIpsum}</p>";
    echo "Panjang karakter: ".strlen($loremIpsum)."<br>";
    echo "Panjang kata: ".str_word_count($loremIpsum)."<br>";
    echo "<p>".strtoupper($loremIpsum)."</p>";
    echo "<p>".strtolower($loremIpsum)."</p>";

?>