const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            backgroundImage: {
                // Home
                "sg-header":
                    "url('../../public/assets/img/home/sg/header.png')",

                // Sign me
                "sign-me-adm-mentoring":
                    "url('../../public/assets/img/sign-me/banner/adm-mentoring.png')",
                "sign-me-acad-tutor":
                    "url('../../public/assets/img/sign-me/banner/acad-tutor.png')",
                "sign-me-passin-project":
                    "url('../../public/assets/img/sign-me/banner/passion-project.png')",
                "sign-me-sat-prep":
                    "url('../../public/assets/img/sign-me/banner/sat-prep.png')",

                // Program
                "program-image-1":
                    "url('../../public/assets/img/programs/Admission Mentoring.webp')",
                "program-image-2":
                    "url('../../public/assets/img/programs/Passion Project-Mentoring Program.webp')",
                "program-image-3":
                    "url('../../public/assets/img/programs/Academic &-Test Preparation.webp')",

                // Admission mentoring
                // Undergraduate
                "undergraduate-header":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/Adm mentoring undergraduate resize.webp')",
                "undergraduate-do":
                    "url('../../public/assets/img/admission mentoring/Undergraduate/undergraduate photos.webp')",

                // Transfer
                "transfer-header":
                    "url('../../public/assets/img/admission mentoring/Master transfer/Adm mentoring master resize.webp')",
                "transfer-do":
                    "url('../../public/assets/img/admission mentoring/Master transfer/master transfer photos.webp')",

                // Graduate
                "graduate-header":
                    "url('../../public/assets/img/admission mentoring/Graduate/Adm mentoring graduate resize.webp')",
                "graduate-do":
                    "url('../../public/assets/img/admission mentoring/Graduate/Graduate photos.webp')",

                // passion project
                "passion-project-bg-entre":
                    "url('../../public/assets/img/passion_project_mentoring/background-entre.webp')",
                "passion-project-bg-entre-2":
                    "url('../../public/assets/img/passion_project_mentoring/background-entre.webp')",
                "passion-project-bg-entre-2":
                    "url('../../public/assets/img/passion_project_mentoring/Rectangle-6.webp')",
                "passion-project-bg-entre-3":
                    "url('../../public/assets/img/passion_project_mentoring/preview-timetable-entrepreneurshiip.webp')",
                "passion-project-bg-scien-1":
                    "url('../../public/assets/img/passion_project_mentoring/background-science.webp')",
                "passion-project-bg-scien-2":
                    "url('../../public/assets/img/passion_project_mentoring/Rectangle-32.webp')",
                "passion-project-bg-scien-3":
                    "url('../../public/assets/img/passion_project_mentoring/scientific research.png')",

                // header upcomming event
                "upcomming-header":
                    "url('../../public/assets/img/banner/Upcoming event banner.webp')",

                // header mentor
                "mentor-header":
                    "url('../../public/assets/img/mentor/header.png')",
            },
            fontFamily: {
                primary: "Asap, sans-serif",
            },
            colors: {
                primary: "#233469",
                yellow: "#f78614",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
