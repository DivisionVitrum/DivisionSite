window.onload = function() {
    init();
};

function init(){
    toggle();
    linecount();
}

function toggle(){
    var dashboard = $("#dashboard");
    var blog = $("#blogpost");
    var project = $("#project");

    var dashbutton = $("#dashbutton");
    var blogbutton = $("#blogbutton");
    var projectbutton = $("#projectbutton");

    dashboard.show();
    dashbutton.addClass("active");

    dashbutton.click("click", function(){
        dashboard.show();dashbutton.addClass("active");

        blog.hide();blogbutton.removeClass("active");

        project.hide();projectbutton.removeClass("active");
    });
    blogbutton.click("click", function(){
        dashboard.hide();dashbutton.removeClass("active");

        blog.show();blogbutton.addClass("active");

        project.hide();projectbutton.removeClass("active");
    });
    projectbutton.click("click", function(){
        dashboard.hide();dashbutton.removeClass("active");

        blog.hide();blogbutton.removeClass("active");

        project.show();projectbutton.addClass("active");
    });
}
function linecount(){
    var blogArea = $("#blogcontent")[0];
    var projectArea = $("#projectcontent")[0];
    var blogLines = blogArea.value.split("\n");
    var projectLines = projectArea.value.split("\n");
    console.log(blogLines.length);
    console.log(projectLines.length);

    var blogUL = $("#bloglines")[0];
    var projecUL = $("#projectlines")[0];

    for (var x=0; x<(blogLines.length + 1); x++){
        var li = document.createElement("li");
        li.innerHTML = [x];
        blogUL.appendChild(li);
    }

    for (var x=0; x<(projectLines.length); x++){
        var li = document.createElement("li");
        li.innerHTML = [x];
        projecUL.appendChild(li);
    }
}
