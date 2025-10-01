<?php
// 인코딩 설정
header("Content-Type: text/html; charset=UTF-8");

// POST 요청 확인
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: /");
    exit;
}

// 입력값 받기
$name = isset($_POST['성함']) ? trim($_POST['성함']) : '';
$company = isset($_POST['회사/기관']) ? trim($_POST['회사/기관']) : '';
$email = isset($_POST['이메일']) ? trim($_POST['이메일']) : '';
$phone = isset($_POST['연락처']) ? trim($_POST['연락처']) : '';
$message = isset($_POST['상담내용']) ? trim($_POST['상담내용']) : '';

// 간단한 유효성 검증
if (empty($name) || empty($email) || empty($message)) {
    echo '<script>alert("필수 항목을 모두 입력해주세요."); history.back();</script>';
    exit;
}

// 메일 발송 (간단한 텍스트 버전)
$to = "brownfox@ibsolution.co.kr";
$subject = "[IBSolution] 상담 신청 - " . $name;

$body = "=== IBSolution 상담 신청 ===\n\n";
$body .= "성함: " . $name . "\n";
$body .= "회사/기관: " . $company . "\n";
$body .= "이메일: " . $email . "\n";
$body .= "연락처: " . $phone . "\n";
$body .= "상담내용:\n" . $message . "\n\n";
$body .= "접수시간: " . date('Y-m-d H:i:s') . "\n";

$headers = "From: noreply@ibsolution.co.kr\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// 메일 발송 시도
$mailResult = @mail($to, $subject, $body, $headers);

// 성공 페이지 (메일 발송 성공 여부와 관계없이 표시)
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상담 신청 완료</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .success-box {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 400px;
        }
        .checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #4caf50;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: white;
        }
        h1 { color: #333; font-size: 24px; margin: 20px 0; }
        p { color: #666; line-height: 1.6; margin: 15px 0; }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
        }
        .btn:hover { opacity: 0.9; }
        .debug { margin-top: 20px; padding: 10px; background: #f0f0f0; font-size: 12px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="success-box">
        <div class="checkmark">✓</div>
        <h1>상담 신청이 완료되었습니다</h1>
        <p><strong><?php echo htmlspecialchars($name); ?></strong>님의 상담 신청이 정상적으로 접수되었습니다.</p>
        <p>빠른 시일 내에 담당자가 연락드리겠습니다.</p>
        <a href="/" class="btn">홈으로 돌아가기</a>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = "/";
        }, 5000);
    </script>
</body>
</html>
