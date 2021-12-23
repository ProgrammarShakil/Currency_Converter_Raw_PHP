<br><br>
    <footer>
        <div class="text-center mb-3 pt-0 mt-0 "><span class="text-light"> @copy 2021 </span> <span class="text-info"> cashapp.com </span> <span class="text-light"> All Rights Reserved</span>.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
        const copyButton = document.getElementById("btn-copy");

        copyButton.addEventListener("click", async function (event) {
                const content = document.getElementById('content-copy').textContent;
                await navigator.clipboard.writeText(content);
                console.log(await navigator.clipboard.readText());
            });


    </script>
</body>
</html>