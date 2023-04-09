    <div class="row mb demo header"><h1>Nhóm HKN</h1></div> 
    <script>
        let slideIndex = 0;
        showSlides();
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 4000); // thời gian ảnh chạy sau 4 giây
    }
    </script>
    </body>
    </html>