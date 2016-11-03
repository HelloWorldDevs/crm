<?php

/* modules/redhen/modules/redhen_org/templates/redhen-org-content-add-list.html.twig */
class __TwigTemplate_06c8ad197bbf27781f7df46153ff65c30b9817aea9486e2ebdd3d0d698585c2f extends Twig_Template
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
        $tags = array("spaceless" => 17, "for" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'for'),
                array(),
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

        // line 17
        ob_start();
        // line 18
        echo "  <dl>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 20
            echo "      <dt>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "link", array()), "html", null, true));
            echo "</dt>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </dl>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/redhen/modules/redhen_org/templates/redhen-org-content-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  52 => 20,  48 => 19,  45 => 18,  43 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to present a list of custom content entity types/bundles.*/
/*  **/
/*  * Available variables:*/
/*  * - types: A collection of all the available custom entity types/bundles.*/
/*  *   Each type/bundle contains the following:*/
/*  *   - link: A link to add a content entity of this type.*/
/*  *   - description: A description of this content entity types/bundle.*/
/*  **/
/*  * @see template_preprocess_redhen_org_content_add_list()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   <dl>*/
/*     {% for type in types %}*/
/*       <dt>{{ type.link }}</dt>*/
/*     {% endfor %}*/
/*   </dl>*/
/* {% endspaceless %}*/
/* */
