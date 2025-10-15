<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IBSolution | 혁신적인 IT 솔루션</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Pretendard:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#f15631",
            "primary-dark": "#c64522",
            "primary-light": "#ff9a7c",
            secondary: "#1b2c4b",
            "secondary-soft": "#23385f",
            background: "#f7f5f2",
          },
          fontFamily: {
            sans: ["Pretendard", "Poppins", "system-ui"],
            display: ["Poppins", "Pretendard", "system-ui"],
          },
          boxShadow: {
            card: "0 24px 50px -30px rgba(241, 86, 49, 0.45)",
          },
        },
      },
    };
  </script>
  <style>
    .hero-bg {
      background: radial-gradient(circle at top left, rgba(241, 86, 49, 0.35), transparent 55%),
                  radial-gradient(circle at bottom right, rgba(27, 44, 75, 0.7), rgba(12, 20, 36, 0.95));
    }
  </style>
</head>
<body class="bg-background font-sans text-secondary">
  <div class="flex min-h-screen flex-col" id="top">
    <header class="fixed inset-x-0 top-0 z-30 border-b border-white/10 bg-secondary/70 backdrop-blur">
      <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <a href="#top" class="flex items-center gap-3 text-white">
          <img src="images/ci1.png" alt="IBSolution" class="h-8 w-auto" />
          <span class="flex flex-col leading-tight">
            <span class="text-[11px] text-white/70">Innovative Business Solution</span>
          </span>
        </a>
        <nav class="hidden items-center gap-8 text-sm font-medium text-white/80 lg:flex">
          <a href="#services" class="transition hover:text-primary-light">서비스</a>
          <a href="#solutions" class="transition hover:text-primary-light">솔루션</a>
          <a href="#cases" class="transition hover:text-primary-light">포트폴리오</a>
          <a href="#company" class="transition hover:text-primary-light">회사소개</a>
          <a href="#contact" class="transition hover:text-primary-light">연락처</a>
        </nav>
        <a href="#contact" class="hidden rounded-full bg-gradient-to-r from-primary to-primary-dark px-5 py-2 text-sm font-semibold text-white shadow-card transition hover:shadow-lg hover:shadow-primary/40 lg:inline-flex">상담 문의</a>
        <button type="button" id="mobile-menu-button" class="inline-flex items-center gap-1 rounded-full border border-white/30 px-3 py-2 text-white lg:hidden" aria-label="Toggle menu">
          <span class="material-icons text-base">menu</span>
          <span class="text-xs">Menu</span>
        </button>
      </div>
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden bg-secondary/95 backdrop-blur lg:hidden">
        <nav class="mx-auto max-w-7xl px-4 py-6 flex flex-col gap-4 sm:px-6">
          <a href="#services" class="text-white/80 hover:text-primary-light transition py-2 border-b border-white/10">서비스</a>
          <a href="#solutions" class="text-white/80 hover:text-primary-light transition py-2 border-b border-white/10">솔루션</a>
          <a href="#cases" class="text-white/80 hover:text-primary-light transition py-2 border-b border-white/10">포트폴리오</a>
          <a href="#company" class="text-white/80 hover:text-primary-light transition py-2 border-b border-white/10">회사소개</a>
          <a href="#contact" class="text-white/80 hover:text-primary-light transition py-2 border-b border-white/10">연락처</a>
          <a href="#contact" class="mt-2 rounded-full bg-gradient-to-r from-primary to-primary-dark px-5 py-3 text-sm font-semibold text-white text-center shadow-card">상담 문의</a>
        </nav>
      </div>
    </header>

    <main class="flex-1">
      <section class="relative overflow-hidden text-white">
        <div class="absolute inset-0">
          <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop" alt="Technology Background" class="h-full w-full object-cover" style="filter: brightness(0.45);" />
          <div class="absolute inset-0 bg-gradient-to-br from-secondary/70 via-secondary-soft/60 to-primary/30"></div>
        </div>
        <div class="relative mx-auto flex max-w-6xl flex-col items-center gap-12 px-4 pb-28 pt-44 text-center sm:px-6 lg:px-8">
          <div class="space-y-6">
            <p class="inline-flex items-center gap-2 rounded-full border border-white/25 px-4 py-1 text-xs uppercase tracking-[0.32em] text-white/80">
              <span class="material-icons text-base">bolt</span>
              디지털 혁신 파트너
            </p>
            <h1 class="text-3xl font-semibold leading-tight sm:text-5xl sm:leading-tight">
              최신 기술로 비즈니스 혁신을 실현합니다<br />검증된 기술력의 IT 솔루션 전문기업
            </h1>
            <p class="mx-auto max-w-2xl text-base text-white/85 sm:text-lg">
              클라우드, AI, 빅데이터 등 최신 기술 트렌드를 선도하며 시스템 통합, 모바일 개발, 웹 솔루션까지<br />
              안정성과 확장성을 갖춘 맞춤형 솔루션으로 고객의 디지털 혁신을 완성합니다.
            </p>
            <div class="flex flex-col items-center gap-4 sm:flex-row sm:justify-center">
              <a href="#services" class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-primary to-primary-dark px-7 py-3 text-sm font-semibold text-white shadow-lg shadow-primary/30 transition hover:scale-[1.02]">
                <span class="material-icons text-base">insights</span>
                서비스 자세히 보기
              </a>
              <a href="#contact" class="inline-flex items-center gap-2 rounded-full border border-white/50 px-7 py-3 text-sm font-semibold text-white/80 transition hover:bg-white/10">
                <span class="material-icons text-base">forum</span>
                상담 문의하기
              </a>
            </div>
          </div>
          <div class="grid w-full gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-2xl bg-white/10 p-6 text-left backdrop-blur">
              <p class="text-3xl font-semibold">20+년</p>
              <p class="mt-2 text-sm text-white/75">축적된 IT 프로젝트 노하우</p>
            </div>
            <div class="rounded-2xl bg-white/10 p-6 text-left backdrop-blur">
              <p class="text-3xl font-semibold">150+건</p>
              <p class="mt-2 text-sm text-white/75">다양한 업계와 규모의 성공 프로젝트</p>
            </div>
            <div class="rounded-2xl bg-white/10 p-6 text-left backdrop-blur">
              <p class="text-3xl font-semibold">SI+웹솔루션</p>
              <p class="mt-2 text-sm text-white/75">시스템통합과 자체 웹솔루션 전문 기업</p>
            </div>
            <div class="rounded-2xl bg-white/10 p-6 text-left backdrop-blur">
              <p class="text-3xl font-semibold">전 과정</p>
              <p class="mt-2 text-sm text-white/75">기획부터 운영까지 원스톱 서비스</p>
            </div>
          </div>
        </div>
      </section>

      <section id="services" class="bg-white py-24">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary">Services</p>
            <h2 class="mt-4 text-3xl font-semibold text-secondary">디지털 혁신을 위한 아이비솔루션의 핵심 서비스</h2>
            <p class="mt-4 text-base text-secondary/70">
              빠르게 변화하는 비즈니스 환경에서 고객 요구사항에 최적화된 맞춤형 솔루션으로 디지털 혁신을 이끌어갑니다.
            </p>
          </div>
          <div class="mt-16 grid gap-8 lg:grid-cols-3">
            <article class="flex h-full flex-col rounded-3xl border border-primary/10 bg-primary/10 p-8 shadow-sm shadow-primary/10">
              <span class="material-icons text-3xl text-primary">hub</span>
              <h3 class="mt-6 text-xl font-semibold text-secondary">시스템 통합 (SI)</h3>
              <p class="mt-4 text-sm leading-relaxed text-secondary/70">
                하드웨어, 소프트웨어, 네트워크 등 다양한 IT 자원을 통합하여 최적화된 정보시스템을 구축합니다. 고객의 비즈니스 환경에 맞는 맞춤형 솔루션을 제공합니다.
              </p>
              <ul class="mt-6 space-y-3 text-sm text-secondary/60">
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>레거시 시스템과의 완벽한 연동 지원</li>
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>클라우드 마이그레이션 및 하이브리드 구축</li>
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>보안 강화와 성능 최적화를 통한 안정성 확보</li>
              </ul>
            </article>
            <article class="flex h-full flex-col rounded-3xl border border-primary/10 bg-primary/10 p-8 shadow-sm shadow-primary/10">
              <span class="material-icons text-3xl text-primary">mobile_friendly</span>
              <h3 class="mt-6 text-xl font-semibold text-secondary">모바일 앱 개발</h3>
              <p class="mt-4 text-sm leading-relaxed text-secondary/70">
                사용자 중심의 UI/UX 설계로 직관적이고 편리한 모바일 앱을 제공합니다. iOS와 Android 플랫폼을 모두 지원하는 크로스플랫폼 솔루션을 제공합니다.
              </p>
              <ul class="mt-6 space-y-3 text-sm text-secondary/60">
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>네이티브와 하이브리드 앱 개발</li>
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>사용자 경험 최적화와 성능 튜닝</li>
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>앱스토어 등록 및 마케팅 지원</li>
              </ul>
              <div class="mt-6 pt-4 border-t border-primary/20">
                <a href="https://www.appmake.co.kr" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-semibold text-primary hover:text-primary-dark transition">
                  <span class="material-icons text-base">open_in_new</span>
                  앱메이크 솔루션 바로가기
                </a>
              </div>
            </article>
            <article class="flex h-full flex-col rounded-3xl border border-primary/10 bg-primary/10 p-8 shadow-sm shadow-primary/10">
              <span class="material-icons text-3xl text-primary">psychology</span>
              <h3 class="mt-6 text-xl font-semibold text-secondary">디지털 전환 컨설팅</h3>
              <p class="mt-4 text-sm leading-relaxed text-secondary/70">
                기업의 디지털 전환을 위한 전략적 컨설팅부터 구체적인 실행 방안까지 제시합니다. 모듈화와 자동화를 통해 개발 생산성과 재사용성을 높입니다.
              </p>
              <ul class="mt-6 space-y-3 text-sm text-secondary/60">
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>디지털 혁신 로드맵 수립과 전략 수립</li>
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>비즈니스 프로세스 개선 및 자동화</li>
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>기술 아키텍처 설계와 구현 지원</li>
              </ul>
            </article>
          </div>

          <div class="mt-16 overflow-hidden rounded-3xl border border-primary/30 bg-white shadow-xl shadow-primary/20 lg:flex lg:items-center">
            <div class="lg:w-1/2 p-6">
              <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=2070&auto=format&fit=crop" alt="시스템 통합 프로젝트" class="h-full w-full object-cover rounded-2xl" />
            </div>
            <div class="space-y-5 px-8 py-10 lg:w-1/2">
              <span class="inline-flex items-center gap-2 rounded-full bg-primary/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.32em] text-primary">System Integration</span>
              <h3 class="text-2xl font-semibold text-secondary">맞춤형 시스템통합(SI) 전문 서비스</h3>
              <p class="text-sm leading-relaxed text-secondary/70">복잡한 IT 환경을 통합하고 최적화하여 비즈니스 효율성을 극대화하는 원스톱 SI 솔루션을 제공합니다. 고객의 비즈니스 목표에 부합하는 안정적이고 확장 가능한 시스템을 구축합니다.</p>
              <ul class="space-y-2 text-sm text-secondary/60">
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>요구사항 분석부터 시스템 설계까지 전 과정 지원</li>
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>다양한 플랫폼과의 완벽한 호환성 보장</li>
                <li class="flex items-start gap-2"><span class="material-icons text-base text-primary">check_circle</span>운영 및 유지보수를 포함한 라이프사이클 관리</li>
              </ul>
              <div class="pt-2">
                <a href="#contact" class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-primary to-primary-dark px-5 py-2 text-sm font-semibold text-white transition hover:shadow-card">
                  SI 전문 상담 받기
                  <span class="material-icons text-base">arrow_forward</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="solutions" class="bg-secondary py-24 text-white">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <div class="flex flex-col gap-12 lg:flex-row lg:items-start">
            <div class="lg:w-80 flex-shrink-0">
              <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-light">Solutions</p>
              <h2 class="mt-4 text-3xl font-semibold">자체 개발 솔루션</h2>
              <p class="mt-4 text-base text-white/75">
                모바일 앱 제작, 시스템 연계, 웹사이트 구축까지 실무에 최적화된 자체 개발 솔루션을 제공합니다.
              </p>
              <dl class="mt-6 grid gap-3 text-sm text-white/70">
                <div class="flex items-start gap-2">
                  <span class="material-icons text-lg text-primary-light">verified</span>
                  <div>
                    <dt class="font-semibold text-white">빠른 개발과 도입</dt>
                    <dd class="mt-1">검증된 솔루션으로 개발 기간을 단축하고 안정적으로 운영합니다.</dd>
                  </div>
                </div>
                <div class="flex items-start gap-2">
                  <span class="material-icons text-lg text-primary-light">verified</span>
                  <div>
                    <dt class="font-semibold text-white">유연한 커스터마이징</dt>
                    <dd class="mt-1">고객 요구사항에 맞춰 기능을 확장하고 맞춤 구축합니다.</dd>
                  </div>
                </div>
                <div class="flex items-start gap-2">
                  <span class="material-icons text-lg text-primary-light">verified</span>
                  <div>
                    <dt class="font-semibold text-white">운영 및 기술 지원</dt>
                    <dd class="mt-1">도입 후 지속적인 유지보수와 기술 지원을 제공합니다.</dd>
                  </div>
                </div>
                <div class="flex items-start gap-2">
                  <span class="material-icons text-lg text-primary-light">verified</span>
                  <div>
                    <dt class="font-semibold text-white">비용 효율적 구축</dt>
                    <dd class="mt-1">자체 솔루션 기반으로 개발 비용을 절감하고 ROI를 극대화합니다.</dd>
                  </div>
                </div>
              </dl>
            </div>
            <div class="grid flex-1 gap-6 lg:grid-cols-3">
              <article class="rounded-3xl bg-white/10 p-6 backdrop-blur">
                <div class="h-36 w-full rounded-2xl overflow-hidden">
                  <img src="https://images.unsplash.com/photo-1556656793-08538906a9f8?q=80&w=800&auto=format&fit=crop" alt="모바일 앱 솔루션" class="h-full w-full object-cover" />
                </div>
                <h3 class="mt-5 text-xl font-semibold">AppMake</h3>
                <p class="mt-3 text-sm text-white/70">전문지식 없이도 모바일 기기에서 직접 앱을 제작할 수 있는 하이브리드 앱 개발 솔루션입니다.</p>
                <ul class="mt-4 space-y-2 text-xs text-white/60">
                  <li class="flex items-start gap-2"><span class="text-primary-light">·</span>모바일웹을 하이브리드앱으로 전환</li>
                  <li class="flex items-start gap-2"><span class="text-primary-light">·</span>안드로이드+iOS 동시 개발</li>
                  <li class="flex items-start gap-2"><span class="text-primary-light">·</span>푸시 알림 기능 완벽 지원</li>
                </ul>
              </article>
              <article class="rounded-3xl bg-white/10 p-6 backdrop-blur">
                <div class="h-36 w-full rounded-2xl overflow-hidden">
                  <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=800&auto=format&fit=crop" alt="데이터 연계 솔루션" class="h-full w-full object-cover" />
                </div>
                <h3 class="mt-5 text-xl font-semibold">eXms</h3>
                <p class="mt-3 text-sm text-white/70">XML 기반 이기종 시스템 연계 솔루션으로 데이터 교환, 전자서명, 암호화를 손쉽게 구현합니다.</p>
                <ul class="mt-4 space-y-2 text-xs text-white/60">
                  <li class="flex items-start gap-2"><span class="text-primary-light">·</span>DB추출 변환/저장</li>
                  <li class="flex items-start gap-2"><span class="text-primary-light">·</span>송 수신 데이터 암 복호화 및 전자서명</li>
                  <li class="flex items-start gap-2"><span class="text-primary-light">·</span>Message 송 수신 처리</li>
                </ul>
              </article>
              <article class="rounded-3xl bg-white/10 p-6 backdrop-blur">
                <div class="h-36 w-full rounded-2xl overflow-hidden">
                  <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?q=80&w=800&auto=format&fit=crop" alt="CMS 솔루션" class="h-full w-full object-cover" />
                </div>
                <h3 class="mt-5 text-xl font-semibold">Sitegen CMS</h3>
                <p class="mt-3 text-sm text-white/70">모듈형 CMS 엔진으로 공공·기업 웹사이트를 빠르게 구축합니다. 관리자 UI, 권한/버전 관리, 다국어, 접근성 대응을 기본 제공합니다.</p>
                <ul class="mt-4 space-y-2 text-xs text-white/60">
                  <li class="flex items-start gap-2"><span class="text-primary-light">·</span>템플릿 기반 페이지 빌더</li>
                  <li class="flex items-start gap-2"><span class="text-primary-light">·</span>통계·리포트, 배너/콘텐츠 관리</li>
                  <li class="flex items-start gap-2"><span class="text-primary-light">·</span>플러그인 확장 구조</li>
                </ul>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section id="cases" class="bg-white py-24">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <div>
            <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary">Portfolio</p>
            <h2 class="mt-4 text-3xl font-semibold text-secondary">주요 프로젝트</h2>
            <p class="mt-4 max-w-4xl text-base text-secondary/70">
              공공기관, 기업, 스타트업 등 다양한 분야에서 축적한 풍부한 경험과 성공 사례를 바탕으로 최적의 솔루션을 제공합니다.
            </p>
          </div>
          <div class="mt-14 grid gap-8 md:grid-cols-2">
            <article class="flex flex-col rounded-3xl border border-secondary/10 bg-background p-8 shadow-sm shadow-secondary/10 hover:shadow-md transition-shadow">
              <div class="rounded-2xl overflow-hidden bg-white shadow-lg">
                <div class="bg-secondary/5 px-3 py-2 flex items-center gap-2">
                  <div class="flex gap-1.5">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                  </div>
                  <div class="flex-1 text-center text-xs text-secondary/50 font-mono">www.kiscon.net</div>
                </div>
                <div class="border-t border-secondary/10 overflow-hidden">
                  <img src="images/kiscon-screenshot.png" alt="건설산업지식정보시스템(KISCON)" class="w-full h-48 object-cover" />
                </div>
              </div>
              <div class="mt-6 flex-1">
                <h3 class="text-xl font-semibold text-secondary">건설산업종합정보망</h3>
                <p class="mt-3 text-sm leading-relaxed text-secondary/70">건설업체 정보조회, 행정제재현황, 벌점조회 등 건설산업 전반의 정보를 통합 관리하는 건설산업 분야 종합정보를 제공하는 시스템을 구축했습니다.</p>
              </div>
              <dl class="mt-5 grid gap-2 text-xs text-secondary/60">
                <div class="flex gap-2"><dt class="min-w-[52px] font-semibold text-secondary/80">구분</dt><dd>국토교통부 공공기관 SI</dd></div>
                <div class="flex gap-2"><dt class="min-w-[52px] font-semibold text-secondary/80">성과</dt><dd>건설산업 정보 투명성 제고</dd></div>
              </dl>
            </article>
            <article class="flex flex-col rounded-3xl border border-secondary/10 bg-background p-8 shadow-sm shadow-secondary/10 hover:shadow-md transition-shadow">
              <div class="rounded-2xl overflow-hidden bg-white shadow-lg">
                <div class="bg-secondary/5 px-3 py-2 flex items-center gap-2">
                  <div class="flex gap-1.5">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                  </div>
                  <div class="flex-1 text-center text-xs text-secondary/50 font-mono">www.swit.or.kr</div>
                </div>
                <div class="border-t border-secondary/10 overflow-hidden">
                  <img src="images/swit-screenshot.png" alt="소프트웨어산업정보시스템(SWIT)" class="w-full h-48 object-cover" />
                </div>
              </div>
              <div class="mt-6 flex-1">
                <h3 class="text-xl font-semibold text-secondary">소프트웨어산업정보시스템</h3>
                <p class="mt-3 text-sm leading-relaxed text-secondary/70">SW사업자신고, SW사업실적신고, SW수요예보 등 소프트웨어 산업 전반의 정보를 통합 제공하는 시스템을 구축했습니다.</p>
              </div>
              <dl class="mt-5 grid gap-2 text-xs text-secondary/60">
                <div class="flex gap-2"><dt class="min-w-[52px] font-semibold text-secondary/80">구분</dt><dd>과학기술정보통신부 공공 SI</dd></div>
                <div class="flex gap-2"><dt class="min-w-[52px] font-semibold text-secondary/80">성과</dt><dd>SW산업 정보 투명성 강화</dd></div>
              </dl>
            </article>
            <article class="flex flex-col rounded-3xl border border-secondary/10 bg-background p-8 shadow-sm shadow-secondary/10 hover:shadow-md transition-shadow">
              <div class="rounded-2xl overflow-hidden bg-white shadow-lg">
                <div class="bg-secondary/5 px-3 py-2 flex items-center gap-2">
                  <div class="flex gap-1.5">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                  </div>
                  <div class="flex-1 text-center text-xs text-secondary/50 font-mono">www.tocycle.com</div>
                </div>
                <div class="border-t border-secondary/10 overflow-hidden">
                  <img src="images/tocycle-screenshot.png" alt="토사이클(TOCYCLE)" class="w-full h-48 object-cover" />
                </div>
              </div>
              <div class="mt-6 flex-1">
                <h3 class="text-xl font-semibold text-secondary">토석정보공유시스템</h3>
                <p class="mt-3 text-sm leading-relaxed text-secondary/70">토석자원의 발생현황에 대한 정보와 거래서비스를 제공하는 토석 정보 통합 관리 플랫폼을 구축했습니다.</p>
              </div>
              <dl class="mt-5 grid gap-2 text-xs text-secondary/60">
                <div class="flex gap-2"><dt class="min-w-[52px] font-semibold text-secondary/80">구분</dt><dd>건설산업정보원 공공 SI</dd></div>
                <div class="flex gap-2"><dt class="min-w-[52px] font-semibold text-secondary/80">성과</dt><dd>토석자원 관리 투명성 제고</dd></div>
              </dl>
            </article>
            <article class="flex flex-col rounded-3xl border border-secondary/10 bg-background p-8 shadow-sm shadow-secondary/10 hover:shadow-md transition-shadow">
              <div class="rounded-2xl overflow-hidden shadow-lg">
                <img src="images/appmake-screenshot.png" alt="앱메이크 솔루션" class="w-full object-cover" style="height: 232px;" />
              </div>
              <div class="mt-6 flex-1">
                <h3 class="text-xl font-semibold text-secondary">다수의 앱개발 프로젝트</h3>
                <p class="mt-3 text-sm leading-relaxed text-secondary/70">앱메이크 솔루션을 기반으로 빠른 개발과 고객 맞춤형 커스터마이징을 통해 다양한 모바일 앱을 성공적으로 구축했습니다.</p>
              </div>
              <dl class="mt-5 grid gap-2 text-xs text-secondary/60">
                <div class="flex gap-2"><dt class="min-w-[52px] font-semibold text-secondary/80">구분</dt><dd>하이브리드 앱 개발</dd></div>
                <div class="flex gap-2"><dt class="min-w-[52px] font-semibold text-secondary/80">성과</dt><dd>개발 기간 단축 및 비용 절감</dd></div>
              </dl>
            </article>
          </div>
        </div>
      </section>

      <section id="company" class="bg-secondary/5 py-24">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <div class="grid gap-12 lg:grid-cols-2">
            <div class="flex flex-col">
              <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary">Company</p>
              <p class="mt-4 text-base text-secondary/70">
                2000년 설립된 (주)아이비솔루션은 풍부한 경험과 전문성을 바탕으로 고객의 비즈니스 혁신을 이끄는 IT 전문 기업입니다. 시스템통합(SI), 웹/모바일 솔루션 개발, IT 컨설팅을 핵심 역량으로 기업과 공공기관의 성공적인 IT 프로젝트를 수행하고 있습니다.
              </p>
              <ul class="mt-8 space-y-5 text-sm text-secondary/70">
                <li class="flex gap-3"><span class="material-icons text-primary">rocket_launch</span><span>클라우드, AI, 빅데이터 등 최신 기술 트렌드 선도</span></li>
                <li class="flex gap-3"><span class="material-icons text-primary">groups</span><span>공공기관, 기업, 협회 등 다양한 분야의 성공 사례 보유</span></li>
                <li class="flex gap-3"><span class="material-icons text-primary">settings_suggest</span><span>요구사항 분석부터 유지보수까지 라이프사이클 전체 관리</span></li>
                <li class="flex gap-3"><span class="material-icons text-primary">inventory</span><span>시스템통합(SI)과 자체 웹/모바일 솔루션 전문 기업</span></li>
                <li class="flex gap-3"><span class="material-icons text-primary">thumb_up</span><span>안정성과 확장성을 갖춘 맞춤형 솔루션 제공</span></li>
              </ul>
            </div>
            <div class="rounded-3xl bg-white p-10 shadow-lg shadow-secondary/10 flex flex-col self-end">
              <h3 class="text-xl font-semibold text-secondary">주요 IT 서비스 영역</h3>
              <div class="mt-6 grid gap-4 text-sm text-secondary/70">
                <div class="rounded-2xl border border-secondary/10 p-4">
                  <h4 class="text-lg font-semibold text-secondary">기획 & 컨설팅</h4>
                  <p class="mt-1 text-sm">디지털 전환 전략 수립부터 실행 계획까지 체계적인 컨설팅을 제공합니다.</p>
                </div>
                <div class="rounded-2xl border border-secondary/10 p-4">
                  <h4 class="text-lg font-semibold text-secondary">개발 & 구축</h4>
                  <p class="mt-1 text-sm">웹 개발, 앱 개발, 시스템 통합 등의 전문적인 기술 서비스를 제공합니다.</p>
                </div>
                <div class="rounded-2xl border border-secondary/10 p-4">
                  <h4 class="text-lg font-semibold text-secondary">운영 & 유지보수</h4>
                  <p class="mt-1 text-sm">안정적인 시스템 운영과 지속적인 개선을 통한 최적의 성능을 보장합니다.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="relative overflow-hidden bg-secondary text-white">
        <div class="absolute inset-0 opacity-40">
          <div class="h-full w-full bg-gradient-to-tr from-secondary via-secondary-soft to-primary/20"></div>
          <div class="absolute inset-0 bg-secondary/60"></div>
        </div>
        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
          <div class="grid gap-10 lg:grid-cols-[1.2fr_1fr] lg:items-start">
            <div class="flex flex-col h-full">
              <p class="text-sm font-semibold uppercase tracking-[0.28em] text-primary-light">Contact</p>
              <h2 class="mt-4 text-3xl font-semibold">프로젝트 상담 및 견적 문의</h2>
              <p class="mt-4 max-w-xl text-base text-white/80">
                궁금하신 점이 있으신가요? 언제든지 편하게 문의해 주세요. 고객님의 비즈니스에 딱 맞는 솔루션을 함께 찾아드리겠습니다.
              </p>
              <div class="mt-10 grid gap-6 md:grid-cols-2">
                <div class="rounded-2xl bg-white/10 p-6">
                  <span class="material-icons text-2xl text-primary-light">call</span>
                  <p class="mt-4 text-sm font-semibold">전화문의</p>
                  <p class="mt-1 text-lg font-semibold">02-577-2001</p>
                  <p class="mt-1 text-xs text-white/70">평일 09:00~18:00</p>
                </div>
                <div class="rounded-2xl bg-white/10 p-6">
                  <span class="material-icons text-2xl text-primary-light">mail</span>
                  <p class="mt-4 text-sm font-semibold">이메일 문의</p>
                  <p class="mt-1 text-lg font-semibold">cs@ibsolution.co.kr</p>
                  <p class="mt-1 text-xs text-white/70">빠른답변 보장, 견적 문의</p>
                </div>
              </div>
              <div class="mt-8 space-y-6 text-sm text-white/80">
                <div>
                  <p class="text-sm font-semibold text-white">주소</p>
                  <p class="mt-2">서울특별시 금천구 가산디지털1로 168, 우림라이온스 밸리 B동1105호 (주)아이비솔루션</p>
                </div>
                <div class="overflow-hidden rounded-3xl border border-white/15 shadow-xl shadow-black/20">
                  <iframe title="IBSolution 오시는 길" src="https://maps.google.com/maps?q=서울특별시+금천구+가산디지털1로+168&t=&z=17&ie=UTF8&iwloc=&output=embed" class="h-[260px] w-full border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            <form action="send-contact.php" method="POST" class="rounded-3xl bg-white/10 p-8 backdrop-blur h-full flex flex-col">
              <h3 class="text-lg font-semibold">상담신청</h3>
              <p class="mt-2 text-sm text-white/70">IT 전문가가 고객의 요구사항을 분석하여 맞춤형 솔루션을 제공합니다.</p>
              <div class="mt-8 space-y-5">
                <div>
                  <label for="name" class="block text-xs font-semibold uppercase tracking-[0.2em] text-white/70">성함</label>
                  <input id="name" name="성함" type="text" placeholder="홍길동" required class="mt-2 w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-white/40 focus:border-primary focus:outline-none" />
                </div>
                <div>
                  <label for="company" class="block text-xs font-semibold uppercase tracking-[0.2em] text-white/70">회사/기관</label>
                  <input id="company" name="회사/기관" type="text" placeholder="회사명을 입력하세요" class="mt-2 w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-white/40 focus:border-primary focus:outline-none" />
                </div>
                <div class="grid gap-5 sm:grid-cols-2">
                  <div>
                    <label for="email" class="block text-xs font-semibold uppercase tracking-[0.2em] text-white/70">이메일</label>
                    <input id="email" name="이메일" type="email" placeholder="name@email.com" required class="mt-2 w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-white/40 focus:border-primary focus:outline-none" />
                  </div>
                  <div>
                    <label for="phone" class="block text-xs font-semibold uppercase tracking-[0.2em] text-white/70">연락처</label>
                    <input id="phone" name="연락처" type="tel" placeholder="010-0000-0000" class="mt-2 w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-white/40 focus:border-primary focus:outline-none" />
                  </div>
                </div>
                <div>
                  <label for="message" class="block text-xs font-semibold uppercase tracking-[0.2em] text-white/70">상담 내용</label>
                  <textarea id="message" name="상담내용" rows="4" placeholder="프로젝트 규모, 예산, 일정 등 상세한 요구사항을 알려주세요." required class="mt-2 w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-white/40 focus:border-primary focus:outline-none"></textarea>
                </div>
              </div>
              <button type="submit" class="mt-8 w-full rounded-full bg-gradient-to-r from-primary to-primary-dark px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-primary/30 transition hover:shadow-primary/50">
                상담 신청하기
              </button>
            </form>
          </div>
        </div>
      </section>
    </main>

    <footer class="bg-secondary py-12 text-white">
      <div class="mx-auto flex max-w-6xl flex-col gap-6 px-4 text-sm sm:flex-row sm:items-center sm:justify-between sm:px-6 lg:px-8">
        <div>
          <p class="text-lg font-semibold">(주)아이비솔루션</p>
          <p class="mt-2 text-xs text-white/60">서울특별시 금천구 가산디지털1로 168, 우림라이온스 밸리 B동1105호</p>
          <p class="text-xs text-white/40">© IBSolution Inc. All rights reserved.</p>
        </div>
        <div class="flex flex-wrap items-center gap-4 text-xs text-white/70">
          <a href="#services" class="transition hover:text-white">서비스</a>
          <a href="#solutions" class="transition hover:text-white">솔루션</a>
          <a href="#cases" class="transition hover:text-white">포트폴리오</a>
          <a href="#contact" class="transition hover:text-white">연락처</a>
        </div>
      </div>
    </footer>
  </div>

  <script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = mobileMenuButton.querySelector('.material-icons');

    mobileMenuButton.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
      // Toggle menu icon between 'menu' and 'close'
      if (mobileMenu.classList.contains('hidden')) {
        menuIcon.textContent = 'menu';
      } else {
        menuIcon.textContent = 'close';
      }
    });

    // Close mobile menu when clicking on a link
    const mobileMenuLinks = mobileMenu.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', function() {
        mobileMenu.classList.add('hidden');
        menuIcon.textContent = 'menu';
      });
    });
  </script>
</body>
</html>