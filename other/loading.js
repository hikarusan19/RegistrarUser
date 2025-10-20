    document.addEventListener("DOMContentLoaded", () => {
      const loader = document.getElementById("loader");

      window.addEventListener("load", () => {
        setTimeout(() => {
          loader.classList.add("fade-out");
          setTimeout(() => loader.style.display = "none", 300);
        }, 300);
      });

      document.querySelectorAll("a[href$='.php']").forEach(link => {
        link.addEventListener("click", e => {
          const href = link.getAttribute("href");
          if (href && href !== "#" && !href.startsWith("javascript:")) {
            e.preventDefault();
            loader.style.display = "flex";
            loader.classList.remove("fade-out");
            setTimeout(() => window.location.href = href, 400);
          }
        });
      });
    });