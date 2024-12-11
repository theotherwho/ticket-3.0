<?php

/* session_sample/flash.twig */
class __TwigTemplate_5fef36ec5ea59bf4a368dbedb0189854 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>Flashdata: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "flashdata"), "test_sess"), "html", null, true);
        echo "</p>

<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, site_url("/session_sample"), "html", null, true);
        echo "\">Go to \"/session_sample\"</a>
";
    }

    public function getTemplateName()
    {
        return "session_sample/flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
