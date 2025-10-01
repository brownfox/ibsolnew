<?php
// CORS 설정 (필요시)
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");

// POST 요청 확인
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 입력값 받기 및 보안 처리
    $name = htmlspecialchars(trim($_POST['성함'] ?? ''));
    $company = htmlspecialchars(trim($_POST['회사/기관'] ?? ''));
    $email = filter_var(trim($_POST['이메일'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['연락처'] ?? ''));
    $message = htmlspecialchars(trim($_POST['상담내용'] ?? ''));

    // 필수 항목 검증
    if (empty($name) || empty($email) || empty($message)) {
        echo '<script>alert("필수 항목을 모두 입력해주세요."); history.back();</script>';
        exit;
    }

    // 이메일 유효성 검증
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("올바른 이메일 주소를 입력해주세요."); history.back();</script>';
        exit;
    }

    // 수신 이메일 주소
    $to = "brownfox@ibsolution.co.kr";

    // 이메일 제목
    $subject = "[IBSolution] 상담 신청 - " . $name;

    // 이메일 본문 (HTML)
    $body = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; text-align: center; }
            .content { background: #f9f9f9; padding: 20px; border: 1px solid #ddd; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #667eea; }
            .value { margin-top: 5px; padding: 10px; background: white; border-left: 3px solid #667eea; }
            .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>상담 신청이 접수되었습니다</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>성함</div>
                    <div class='value'>{$name}</div>
                </div>
                <div class='field'>
                    <div class='label'>회사/기관</div>
                    <div class='value'>{$company}</div>
                </div>
                <div class='field'>
                    <div class='label'>이메일</div>
                    <div class='value'>{$email}</div>
                </div>
                <div class='field'>
                    <div class='label'>연락처</div>
                    <div class='value'>{$phone}</div>
                </div>
                <div class='field'>
                    <div class='label'>상담 내용</div>
                    <div class='value'>" . nl2br($message) . "</div>
                </div>
            </div>
            <div class='footer'>
                <p>이 메일은 IBSolution 홈페이지 상담 신청 폼을 통해 자동 발송되었습니다.</p>
                <p>접수 시간: " . date('Y-m-d H:i:s') . "</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // 이메일 헤더
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // 메일 발송
    if (mail($to, $subject, $body, $headers)) {
        // 성공 메시지
        echo '
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
            </style>
        </head>
        <body>
            <div class="success-box">
                <div class="checkmark">✓</div>
                <h1>상담 신청이 완료되었습니다</h1>
                <p><strong>' . htmlspecialchars($name) . '</strong>님의 상담 신청이 정상적으로 접수되었습니다.</p>
                <p>빠른 시일 내에 담당자가 연락드리겠습니다.</p>
                <a href="/" class="btn">홈으로 돌아가기</a>
            </div>
            <script>
                // 5초 후 자동으로 홈페이지로 이동
                setTimeout(function() {
                    window.location.href = "/";
                }, 5000);
            </script>
        </body>
        </html>
        ';
    } else {
        // 실패 메시지
        echo '<script>alert("메일 발송에 실패했습니다. 나중에 다시 시도해주세요."); history.back();</script>';
    }

} else {
    // POST 요청이 아닌 경우
    header("Location: /");
    exit;
}
?>
