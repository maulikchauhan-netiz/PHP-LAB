
document.addEventListener("DOMContentLoaded", function () {

    // =====================================
    // 1. COPY CODE FUNCTIONALITY
    // =====================================

    function copyTextFallback(text) {

        const textarea = document.createElement("textarea");

        textarea.value = text;
        textarea.setAttribute("readonly", "");

        textarea.style.position = "fixed";
        textarea.style.left = "-9999px";
        textarea.style.top = "0";
        textarea.style.opacity = "0";

        document.body.appendChild(textarea);

        textarea.focus();
        textarea.select();
        textarea.setSelectionRange(0, textarea.value.length);

        let copied = false;

        try {
            copied = document.execCommand("copy");
        } catch (error) {
            copied = false;
        }

        document.body.removeChild(textarea);

        return copied;
    }


    function setupCopyButton(buttonId, codeId) {

        const button = document.getElementById(buttonId);
        const codeElement = document.getElementById(codeId);

        if (button && codeElement) {

            button.addEventListener("click", async function () {

                const code = codeElement.textContent;

                try {

                    // Try modern clipboard API first
                    if (navigator.clipboard && window.isSecureContext) {

                        await navigator.clipboard.writeText(code);

                    } else {

                        // Fallback for unsupported environments
                        const copied = copyTextFallback(code);

                        if (!copied) {
                            throw new Error("Copy failed");
                        }

                    }

                    button.textContent = "Copied!";

                } catch (error) {

                    // Try fallback if modern API fails
                    const copied = copyTextFallback(code);

                    button.textContent = copied
                        ? "Copied!"
                        : "Copy failed";

                }

                setTimeout(function () {
                    button.textContent = "Copy Code";
                }, 2000);

            });

        }

    }


    // Main copy button
    setupCopyButton("copyCodeBtn", "phpSourceCode");

    // Additional copy buttons
    setupCopyButton("copyAdditionCodeBtn", "additionSourceCode");
    setupCopyButton("copyMultilevelCodeBtn", "multilevelSourceCode");
    setupCopyButton("copyInterfaceCodeBtn", "interfaceSourceCode");
    setupCopyButton("copyAbstractCodeBtn", "abstractSourceCode");


    // =====================================
    // 2. MODULE SELECTION
    // =====================================

    const moduleButtons = document.querySelectorAll("[data-module-filter]");
    const practicalContents = document.querySelectorAll("[data-module-content]");

    const searchInput = document.getElementById("practicalSearch");
    const noSearchResults = document.getElementById("noSearchResults");

    let selectedModule = "all";


    function showModule(selected) {

        selectedModule = selected;

        // Reset search when changing modules
        if (searchInput) {
            searchInput.value = "";
        }

        updatePracticalView();

    }


    // =====================================
    // 3. SEARCH AND DISPLAY PRACTICALS
    // =====================================

    function updatePracticalView() {

        const searchTerm = searchInput
            ? searchInput.value.trim().toLowerCase()
            : "";

        let totalMatches = 0;


        // SEARCH MODE: Search across all modules

        if (searchTerm !== "") {

            practicalContents.forEach(function (content) {

                const practicalRows = content.querySelectorAll(".practical-row");

                let moduleMatches = 0;

                practicalRows.forEach(function (row) {

                    // Get practical number
                    const number = row.querySelector(".practical-number")
                        ?.textContent.trim().toLowerCase() || "";

                    // Get practical title
                    const title = row.querySelector(".practical-info h3")
                        ?.textContent.trim().toLowerCase() || "";

                    // Get practical description
                    const description = row.querySelector(".practical-info p")
                        ?.textContent.trim().toLowerCase() || "";

                    // Match number, title or description
                    const matches =
                        number.includes(searchTerm) ||
                        title.includes(searchTerm) ||
                        description.includes(searchTerm) ||
                        number.replace(/^0+/, "").includes(searchTerm);

                    row.hidden = !matches;

                    if (matches) {
                        moduleMatches++;
                        totalMatches++;
                    }

                });


                // Hide modules without matching practicals
                content.hidden = moduleMatches === 0;

            });


            // Display no-results message
            if (noSearchResults) {
                noSearchResults.hidden = totalMatches !== 0;
            }

            // Remove active module selection during search
            moduleButtons.forEach(function (button) {
                button.classList.remove("active");
            });


        } else {

            // =====================================
            // NORMAL MODULE SELECTION MODE
            // =====================================

            practicalContents.forEach(function (content) {

                content.hidden =
                    selectedModule !== "all" &&
                    content.dataset.moduleContent !== selectedModule;

                // Show all practical rows again
                const practicalRows = content.querySelectorAll(".practical-row");

                practicalRows.forEach(function (row) {
                    row.hidden = false;
                });

            });


            // Update active sidebar button
            moduleButtons.forEach(function (button) {

                if (button.dataset.moduleFilter === selectedModule) {
                    button.classList.add("active");
                } else {
                    button.classList.remove("active");
                }

            });

            if (noSearchResults) {
                noSearchResults.hidden = true;
            }

        }

    }


    // Search input event
    if (searchInput) {

        searchInput.addEventListener("input", function () {
            updatePracticalView();
        });

    }


    // =====================================
    // 4. HANDLE SIDEBAR CLICKS
    // =====================================

    moduleButtons.forEach(function (button) {

        button.addEventListener("click", function (event) {

            event.preventDefault();

            const selected = this.dataset.moduleFilter;

            showModule(selected);

        });

    });


    // =====================================
    // 5. PREVIOUS BREADCRUMB FUNCTIONALITY
    // =====================================

    const urlParams = new URLSearchParams(window.location.search);

    const requestedModule = urlParams.get("module");

    if (
        requestedModule &&
        ["1", "2", "3", "4", "5"].includes(requestedModule)
    ) {

        showModule(requestedModule);

    } else {

        showModule("all");

    }

});
