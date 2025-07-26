<?php
include("../conn/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['question'], $_POST['answer'])) {
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        try {
            $stmt = $conn->prepare("INSERT INTO tbl_card (question, answer) VALUES (:question, :answer)");
            
            $stmt->bindParam(":question", $question, PDO::PARAM_STR);
            $stmt->bindParam(":answer", $answer, PDO::PARAM_STR);

            $stmt->execute();

            header("Location: http://localhost/AJ-Project/eduweb/quiz.php");

            exit();
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

    } else {
        echo "
            <script>
                alert('Please fill in all fields!');
                window.location.href = 'http://localhost/AJ-Project/eduweb/quiz.php';
            </script>
        ";
    }
}
?>
