<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 완료 페이지</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
    <div class="intro__inner center">
            <picture class="intro__images">
                <img src="https://r2.jjalbot.com/2023/03/YliB493K77.gif" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 축하드립니다!
            </p>
        </div>
        <div class="join__inner">
            <div class="index">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li class="active">3</li>
                </ul>
            </div>
            <div class="join__result">
            </div>
            <span class="pumping" data-text="관리자 로그인"></span>
        </div> 
        <!-- join__inner  -->
    </main>
    <!-- main -->

    <footer id="footer">
        <div class="footer__inner btStyle mb100 container">
            <div>Copyright @ 2023 KDH</div>
            <div>blog by KDH</div>
        </div>
    </footer>
    <!-- footer -->

    <script>
        const colors = ['#FC4F4F', '#FFBC80', '#FF9F45', '#F76E11']
        // const shapes = ['square', 'circle', 'triangle', 'heart']
        const shapes = ['heart']

        const randomIntBetween = (min, max) => {
        return Math.floor(Math.random() * (max - min + 1) + min)
        }

        class Particle {
        constructor({ x, y, rotation, shape, color, size, duration, parent }) {
            this.x = x
            this.y = y
            this.parent = parent
            this.rotation = rotation
            this.shape = shape
            this.color = color
            this.size = size
            this.duration = duration
            this.children = document.createElement('div')
        }

        draw() {
            this.children.style.setProperty('--x', this.x + 'px')
            this.children.style.setProperty('--y', this.y + 'px')
            this.children.style.setProperty('--r', this.rotation + 'deg')
            this.children.style.setProperty('--c', this.color)
            this.children.style.setProperty('--size', this.size + 'px')
            this.children.style.setProperty('--d', this.duration + 'ms')
            this.children.className = `shape ${this.shape}`
            this.parent.append(this.children)
        }

        animate() {
            this.draw()

            const timer = setTimeout(() => {
            this.parent.removeChild(this.children)
            clearTimeout(timer)
            }, this.duration)
            }
        }

        function animateParticles({ total }) {
        for (let i = 0; i < total; i++) {
            const particle = new Particle({
            x: randomIntBetween(-400, 400),
            y: randomIntBetween(-1300, -100),
            rotation: randomIntBetween(-360 * 5, 360 * 5),
            shape: shapes[randomIntBetween(0, shapes.length - 1)],
            color: colors[randomIntBetween(0, colors.length - 1)],
            size: randomIntBetween(2, 15),
            duration: randomIntBetween(400, 1200),
            parent
            })
            particle.animate()
        }
        }

        let intervalTimer = setInterval(() => {
        animateParticles({ total: 10 })
        }, 100)

        const parent = document.querySelector('.join__inner span')
        parent.addEventListener("touchstart", () => {}, false);
        parent.addEventListener('click', e => {
        if (intervalTimer) {
            clearInterval(intervalTimer)
            intervalTimer = null
            parent.classList.remove('pumping')
        }
        animateParticles({ total: 40 })
        })
    </script>
</body>
</html>