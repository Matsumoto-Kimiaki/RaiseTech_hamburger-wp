$(function () {

  // サイドメニューの開閉
  $(".js-menu").click(function () {
    $(".l-sidebar").addClass("is-open");
    $(".p-menu-bg").addClass("is-open");
    $("body").addClass("is-open");
  });

  $(".c-cross-button").click(function () {
    $(".l-sidebar").removeClass("is-open");
    $(".p-menu-bg").removeClass("is-open");
    $("body").removeClass("is-open");
  });

});
