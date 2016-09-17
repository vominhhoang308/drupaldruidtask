<?php

/* themes/space/templates/page.html.twig */
class __TwigTemplate_cd607ad8d9322a0b03c6ae57d224d09a6102ddb0514dd8aea0ddaf89cdd89735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 67, "set" => 147);
        $filters = array("t" => 88);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 67
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 68
            echo "  <div id=\"header-top\" class=\"section\">
    ";
            // line 69
            if ((isset($context["header_media_video"]) ? $context["header_media_video"] : null)) {
                // line 70
                echo "      <video id=\"header-video\" class=\"ng-scope\" poster=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_video_still"]) ? $context["header_video_still"] : null), "html", null, true));
                echo "\" autoplay loop>
        <source src=\"";
                // line 71
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_media_url"]) ? $context["header_media_url"] : null), "html", null, true));
                echo "\" type=\"video/mp4\">
        Your browser does not support the video tag.
      </video>
    ";
            } else {
                // line 75
                echo "      <div id=\"header-image\" style=\"background: #000 url('";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_media_url"]) ? $context["header_media_url"] : null), "html", null, true));
                echo "') no-repeat fixed center bottom / cover \"></div>
    ";
            }
            // line 77
            echo "
    ";
            // line 78
            if ((isset($context["screen"]) ? $context["screen"] : null)) {
                // line 79
                echo "      <div id=\"header-screen\"></div>
    ";
            }
            // line 81
            echo "    ";
            if ((isset($context["fade"]) ? $context["fade"] : null)) {
                // line 82
                echo "      <div id=\"header-bg\"></div>
    ";
            }
            // line 84
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()), "html", null, true));
            echo "

    <div class=\"section layout-container clearfix\">
      ";
            // line 87
            if ((isset($context["logo"]) ? $context["logo"] : null)) {
                // line 88
                echo "        <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\" id=\"logo\">
          <img src=\"";
                // line 89
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
                echo "\" alt=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" />
        </a>
      ";
            }
            // line 92
            echo "    </div>
    <div class=\"nav-down\"></div>
  </div>

  <div class=\"separator-wrapper\">
    <div class=\"separator separator-left\"></div>
    <div class=\"joint left\"></div>
    <div class=\"separator separator-middle\"></div>
    <div class=\"joint right\"></div>
    <div class=\"separator separator-right\"></div>
  </div>
";
        }
        // line 104
        echo "
<div id=\"page-wrapper\">
  <div id=\"page\">
    ";
        // line 107
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 108
            echo "      <div id=\"main-menu\">
        <!-- Show the site logo -->
        <img alt=\"";
            // line 110
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["space_logo"]) ? $context["space_logo"] : null), "html", null, true));
            echo "\">
        ";
            // line 111
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
      </div>
      <div class=\"menu-hamburger icon-menu\">
      </div>
    ";
        }
        // line 116
        echo "
    ";
        // line 117
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 118
            echo "      <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
            echo "\">
        ";
            // line 119
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
      </header>
    ";
        }
        // line 122
        echo "
    ";
        // line 123
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 124
            echo "      <div class=\"featured\" class=\"section\">
        <aside class=\"featured__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 126
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 130
        echo "
    ";
        // line 131
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_top", array())) {
            // line 132
            echo "      <div class=\"page-top\">
        <aside class=\"page-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 134
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_top", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 138
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\" style=\"background: ";
        // line 139
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["region_content_image_url"]) ? $context["region_content_image_url"] : null), "html", null, true));
        echo "\">
      ";
        // line 140
        if ((isset($context["region_content_screen"]) ? $context["region_content_screen"] : null)) {
            // line 141
            echo "        <div class=\"screen\"></div>
      ";
        }
        // line 143
        echo "      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 144
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

        ";
        // line 146
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()))) {
            // line 147
            echo "          ";
            $context["content_class"] = "content-both";
            // line 148
            echo "        ";
        } elseif (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()))) {
            // line 149
            echo "          ";
            $context["content_class"] = "content-left";
            // line 150
            echo "        ";
        } elseif (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()))) {
            // line 151
            echo "          ";
            $context["content_class"] = "content-right";
            // line 152
            echo "        ";
        } elseif (( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()))) {
            // line 153
            echo "          ";
            $context["content_class"] = "content-full";
            // line 154
            echo "        ";
        }
        // line 155
        echo "
        <main id=\"content\" class=\"column main-content ";
        // line 156
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_class"]) ? $context["content_class"] : null), "html", null, true));
        echo "\" role=\"main\">
          ";
        // line 157
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 158
            echo "            <div class=\"content-top\">
              <aside class=\"content-top__inner section layout-container clearfix\" role=\"complementary\">
                ";
            // line 160
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
              </aside>
            </div>
          ";
        }
        // line 164
        echo "
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 167
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
            ";
        // line 168
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 169
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 170
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
              </h1>
            ";
        }
        // line 173
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
            ";
        // line 174
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 175
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
                ";
            // line 176
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
              </nav>
            ";
        }
        // line 179
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            ";
        // line 180
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 181
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>
            ";
        }
        // line 183
        echo "
            ";
        // line 184
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          </section>

          ";
        // line 187
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 188
            echo "            <div class=\"content-bottom\">
              <aside class=\"content-bottom__inner section layout-container clearfix\" role=\"complementary\">
                ";
            // line 190
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
              </aside>
            </div>
          ";
        }
        // line 194
        echo "
        </main>
        ";
        // line 196
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array())) {
            // line 197
            echo "          <div id=\"sidebar-left\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 199
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()), "html", null, true));
            echo "
            </aside>
          </div>
        ";
        }
        // line 203
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
            // line 204
            echo "          <div id=\"sidebar-right\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 206
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()), "html", null, true));
            echo "
            </aside>
          </div>
        ";
        }
        // line 210
        echo "      </div>
    </div>

    <div class=\"separator-footer\"></div>

    ";
        // line 215
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_2", array())) {
            // line 216
            echo "      <div class=\"content_2_wrapper\" style=\"background: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["region_content_2_image_url"]) ? $context["region_content_2_image_url"] : null), "html", null, true));
            echo "\">
        ";
            // line 217
            if ((isset($context["region_content_2_screen"]) ? $context["region_content_2_screen"] : null)) {
                // line 218
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 220
            echo "        <div class=\"content_2\">
          <aside class=\"content_2__inner section layout-container clearfix\" role=\"complementary\">
            ";
            // line 222
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_2", array()), "html", null, true));
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 227
        echo "
    ";
        // line 228
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_3", array())) {
            // line 229
            echo "      <div class=\"content_3_wrapper\" style=\"background: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["region_content_3_image_url"]) ? $context["region_content_3_image_url"] : null), "html", null, true));
            echo "\">
        ";
            // line 230
            if ((isset($context["region_content_3_screen"]) ? $context["region_content_3_screen"] : null)) {
                // line 231
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 233
            echo "        <div class=\"content_3\">
          <aside class=\"content_3__inner section layout-container clearfix\" role=\"complementary\">
            ";
            // line 235
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_3", array()), "html", null, true));
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 240
        echo "
    ";
        // line 241
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_4", array())) {
            // line 242
            echo "      <div class=\"content_4_wrapper\" style=\"background: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["region_content_4_image_url"]) ? $context["region_content_4_image_url"] : null), "html", null, true));
            echo "\">
        ";
            // line 243
            if ((isset($context["region_content_4_screen"]) ? $context["region_content_4_screen"] : null)) {
                // line 244
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 246
            echo "        <div class=\"content_4\">
          <aside class=\"content_4__inner section layout-container clearfix\" role=\"complementary\">
            ";
            // line 248
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_4", array()), "html", null, true));
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 253
        echo "
    ";
        // line 254
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_5", array())) {
            // line 255
            echo "      <div class=\"content_5_wrapper\" style=\"background: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["region_content_5_image_url"]) ? $context["region_content_5_image_url"] : null), "html", null, true));
            echo "\">
        ";
            // line 256
            if ((isset($context["region_content_5_screen"]) ? $context["region_content_5_screen"] : null)) {
                // line 257
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 259
            echo "        <div class=\"content_5\">
          <aside class=\"content_5__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 261
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_5", array()), "html", null, true));
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 266
        echo "
    ";
        // line 267
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array())) {
            // line 268
            echo "      <div class=\"page-bottom\">
        <aside class=\"page-bottom__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 270
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 274
        echo "
    <footer class=\"site-footer\">
      ";
        // line 276
        if ((isset($context["social_icons"]) ? $context["social_icons"] : null)) {
            // line 277
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["social_icons"]) ? $context["social_icons"] : null), "html", null, true));
            echo "
      ";
        }
        // line 279
        echo "      ";
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array()))) {
            // line 280
            echo "        <div class=\"site-footer__top layout-container clearfix\">
          ";
            // line 281
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array()), "html", null, true));
            echo "
          ";
            // line 282
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array()), "html", null, true));
            echo "
          ";
            // line 283
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 286
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array())) {
            // line 287
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_bottom", array()), "html", null, true));
            echo "
      ";
        }
        // line 289
        echo "    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/space/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 289,  533 => 287,  530 => 286,  524 => 283,  520 => 282,  516 => 281,  513 => 280,  510 => 279,  504 => 277,  502 => 276,  498 => 274,  491 => 270,  487 => 268,  485 => 267,  482 => 266,  474 => 261,  470 => 259,  466 => 257,  464 => 256,  459 => 255,  457 => 254,  454 => 253,  446 => 248,  442 => 246,  438 => 244,  436 => 243,  431 => 242,  429 => 241,  426 => 240,  418 => 235,  414 => 233,  410 => 231,  408 => 230,  403 => 229,  401 => 228,  398 => 227,  390 => 222,  386 => 220,  382 => 218,  380 => 217,  375 => 216,  373 => 215,  366 => 210,  359 => 206,  355 => 204,  352 => 203,  345 => 199,  341 => 197,  339 => 196,  335 => 194,  328 => 190,  324 => 188,  322 => 187,  316 => 184,  313 => 183,  307 => 181,  305 => 180,  300 => 179,  294 => 176,  289 => 175,  287 => 174,  282 => 173,  276 => 170,  273 => 169,  271 => 168,  267 => 167,  262 => 164,  255 => 160,  251 => 158,  249 => 157,  245 => 156,  242 => 155,  239 => 154,  236 => 153,  233 => 152,  230 => 151,  227 => 150,  224 => 149,  221 => 148,  218 => 147,  216 => 146,  211 => 144,  208 => 143,  204 => 141,  202 => 140,  198 => 139,  195 => 138,  188 => 134,  184 => 132,  182 => 131,  179 => 130,  172 => 126,  168 => 124,  166 => 123,  163 => 122,  157 => 119,  152 => 118,  150 => 117,  147 => 116,  139 => 111,  133 => 110,  129 => 108,  127 => 107,  122 => 104,  108 => 92,  100 => 89,  93 => 88,  91 => 87,  84 => 84,  80 => 82,  77 => 81,  73 => 79,  71 => 78,  68 => 77,  62 => 75,  55 => 71,  50 => 70,  48 => 69,  45 => 68,  43 => 67,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Space's theme implementation to display a single page.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  * - hide_site_name: A flag indicating if the site name has been toggled off on*/
/*  *   the theme settings page. If hidden, the "visually-hidden" class is added*/
/*  *   to make the site name visually hidden, but still accessible.*/
/*  * - hide_site_slogan: A flag indicating if the site slogan has been toggled off*/
/*  *   on the theme settings page. If hidden, the "visually-hidden" class is*/
/*  *   added to make the site slogan visually hidden, but still accessible.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header_top: Items for the header top region.*/
/*  * - page.header: Items for the header region.*/
/*  * - page.main_menu: The main menu of the site.*/
/*  * - messages: Site message display region.*/
/*  * - page_top: Items for the top of the page.*/
/*  * - content_top: Items that display above the content region.*/
/*  * - content: Items for the content region.*/
/*  * - content_bottom: Items that will show under the content region.*/
/*  * - left_sidebar: Items for the left sidebar region.*/
/*  * - right_sidebar: Items for the right sidebar region.*/
/*  * - page_bottom: Items for the page bottom region.*/
/*  * - footer_left: Items for the footer left region.*/
/*  * - footer_middle: Items for the footer middle region.*/
/*  * - footer_right: Items for the footer right region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see space_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% if is_front %}*/
/*   <div id="header-top" class="section">*/
/*     {% if header_media_video %}*/
/*       <video id="header-video" class="ng-scope" poster="{{ header_video_still }}" autoplay loop>*/
/*         <source src="{{ header_media_url }}" type="video/mp4">*/
/*         Your browser does not support the video tag.*/
/*       </video>*/
/*     {% else %}*/
/*       <div id="header-image" style="background: #000 url('{{ header_media_url }}') no-repeat fixed center bottom / cover "></div>*/
/*     {% endif %}*/
/* */
/*     {% if screen %}*/
/*       <div id="header-screen"></div>*/
/*     {% endif %}*/
/*     {% if fade %}*/
/*       <div id="header-bg"></div>*/
/*     {% endif %}*/
/*     {{ page.header_top }}*/
/* */
/*     <div class="section layout-container clearfix">*/
/*       {% if logo %}*/
/*         <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home" id="logo">*/
/*           <img src="{{ logo }}" alt="{{ 'Home'|t }}" />*/
/*         </a>*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="nav-down"></div>*/
/*   </div>*/
/* */
/*   <div class="separator-wrapper">*/
/*     <div class="separator separator-left"></div>*/
/*     <div class="joint left"></div>*/
/*     <div class="separator separator-middle"></div>*/
/*     <div class="joint right"></div>*/
/*     <div class="separator separator-right"></div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* <div id="page-wrapper">*/
/*   <div id="page">*/
/*     {% if page.main_menu %}*/
/*       <div id="main-menu">*/
/*         <!-- Show the site logo -->*/
/*         <img alt="{{ 'Home'|t }}" src="{{ space_logo }}">*/
/*         {{ page.main_menu }}*/
/*       </div>*/
/*       <div class="menu-hamburger icon-menu">*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.header %}*/
/*       <header id="header" class="header" role="banner" aria-label="{{ 'Site header'|t}}">*/
/*         {{ page.header }}*/
/*       </header>*/
/*     {% endif %}*/
/* */
/*     {% if page.featured %}*/
/*       <div class="featured" class="section">*/
/*         <aside class="featured__inner section layout-container clearfix" role="complementary">*/
/*           {{ page.featured }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.page_top %}*/
/*       <div class="page-top">*/
/*         <aside class="page-top__inner section layout-container clearfix" role="complementary">*/
/*           {{ page.page_top }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix" style="background: {{ region_content_image_url }}">*/
/*       {% if region_content_screen %}*/
/*         <div class="screen"></div>*/
/*       {% endif %}*/
/*       <div id="main" class="layout-main clearfix">*/
/*         {{ page.breadcrumb }}*/
/* */
/*         {% if page.sidebar_left and page.sidebar_right %}*/
/*           {% set content_class = 'content-both' %}*/
/*         {% elseif page.sidebar_left and not page.sidebar_right %}*/
/*           {% set content_class = 'content-left' %}*/
/*         {% elseif page.sidebar_right and not page.sidebar_left %}*/
/*           {% set content_class = 'content-right' %}*/
/*         {% elseif not page.sidebar_left and not page.sidebar_right %}*/
/*           {% set content_class = 'content-full' %}*/
/*         {% endif %}*/
/* */
/*         <main id="content" class="column main-content {{ content_class }}" role="main">*/
/*           {% if page.content_top %}*/
/*             <div class="content-top">*/
/*               <aside class="content-top__inner section layout-container clearfix" role="complementary">*/
/*                 {{ page.content_top }}*/
/*               </aside>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           <section class="section">*/
/*             <a id="main-content" tabindex="-1"></a>*/
/*             {{ title_prefix }}*/
/*             {% if title %}*/
/*               <h1 class="title" id="page-title">*/
/*                 {{ title }}*/
/*               </h1>*/
/*             {% endif %}*/
/*             {{ title_suffix }}*/
/*             {% if tabs %}*/
/*               <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*                 {{ tabs }}*/
/*               </nav>*/
/*             {% endif %}*/
/*             {{ page.help }}*/
/*             {% if action_links %}*/
/*               <ul class="action-links">{{ action_links }}</ul>*/
/*             {% endif %}*/
/* */
/*             {{ page.content }}*/
/*           </section>*/
/* */
/*           {% if page.content_bottom %}*/
/*             <div class="content-bottom">*/
/*               <aside class="content-bottom__inner section layout-container clearfix" role="complementary">*/
/*                 {{ page.content_bottom }}*/
/*               </aside>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*         </main>*/
/*         {% if page.sidebar_left %}*/
/*           <div id="sidebar-left" class="column sidebar">*/
/*             <aside class="section" role="complementary">*/
/*               {{ page.sidebar_left }}*/
/*             </aside>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.sidebar_right %}*/
/*           <div id="sidebar-right" class="column sidebar">*/
/*             <aside class="section" role="complementary">*/
/*               {{ page.sidebar_right }}*/
/*             </aside>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="separator-footer"></div>*/
/* */
/*     {% if page.content_2 %}*/
/*       <div class="content_2_wrapper" style="background: {{ region_content_2_image_url }}">*/
/*         {% if region_content_2_screen %}*/
/*           <div class="screen"></div>*/
/*         {% endif %}*/
/*         <div class="content_2">*/
/*           <aside class="content_2__inner section layout-container clearfix" role="complementary">*/
/*             {{ page.content_2 }}*/
/*           </aside>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.content_3 %}*/
/*       <div class="content_3_wrapper" style="background: {{ region_content_3_image_url }}">*/
/*         {% if region_content_3_screen %}*/
/*           <div class="screen"></div>*/
/*         {% endif %}*/
/*         <div class="content_3">*/
/*           <aside class="content_3__inner section layout-container clearfix" role="complementary">*/
/*             {{ page.content_3 }}*/
/*           </aside>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.content_4 %}*/
/*       <div class="content_4_wrapper" style="background: {{ region_content_4_image_url }}">*/
/*         {% if region_content_4_screen %}*/
/*           <div class="screen"></div>*/
/*         {% endif %}*/
/*         <div class="content_4">*/
/*           <aside class="content_4__inner section layout-container clearfix" role="complementary">*/
/*             {{ page.content_4 }}*/
/*           </aside>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.content_5 %}*/
/*       <div class="content_5_wrapper" style="background: {{ region_content_5_image_url }}">*/
/*         {% if region_content_5_screen %}*/
/*           <div class="screen"></div>*/
/*         {% endif %}*/
/*         <div class="content_5">*/
/*           <aside class="content_5__inner section layout-container clearfix" role="complementary">*/
/*           {{ page.content_5 }}*/
/*           </aside>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.page_bottom %}*/
/*       <div class="page-bottom">*/
/*         <aside class="page-bottom__inner section layout-container clearfix" role="complementary">*/
/*           {{ page.page_bottom }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <footer class="site-footer">*/
/*       {% if social_icons %}*/
/*         {{ social_icons }}*/
/*       {% endif %}*/
/*       {% if page.footer_left or page.footer_middle or page.footer_right %}*/
/*         <div class="site-footer__top layout-container clearfix">*/
/*           {{ page.footer_left }}*/
/*           {{ page.footer_middle }}*/
/*           {{ page.footer_right }}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if page.footer_bottom %}*/
/*         {{ page.footer_bottom }}*/
/*       {% endif %}*/
/*     </footer>*/
/*   </div>*/
/* </div>*/
/* */
