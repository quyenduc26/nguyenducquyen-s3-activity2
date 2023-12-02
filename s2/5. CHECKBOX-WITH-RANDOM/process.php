<?php require_once 'templates/header.php'; ?>

<?php
$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
 
        $selectedLanguages = isset($_POST['languages']) ? $_POST['languages'] : [];
        foreach ($selectedLanguages as $language) {
            $randomColor = $colors[array_rand($colors)];
            echo "<button class='btn me-2 text-light bg-$randomColor '>$language</button>";
        }

?>

<?php require_once 'templates/footer.php'; ?>
