<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* post/index.html.twig */
class __TwigTemplate_2e0c329e125122d689afe01b4e20db6cfb15a989f225205e89effef201454f6e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les articles !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"my-3\">Nos articles</h1>
        ";
        // line 8
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 9
            echo "            <a href=\"/login\" class=\"my-2 btn btn-success\">Connexion</a>
        ";
        } else {
            // line 11
            echo "            <a href=\"/logout\" class=\"my-2 btn btn-danger\">Déconnexion</a>
        ";
        }
        // line 13
        echo "        <div class=\"row\">
            
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            echo "                <div class=\"col-3 mb-3\">
                    <div class=\"border border-dark rounded p-2\">
                        <h3>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</h3>
                        <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "introduction", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                        <a href=\"#\" class=\"btn btn-primary\">Lire la suite</a>
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-link js-link\">
                           
                        ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23) && twig_get_attribute($this->env, $this->source, $context["post"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)], "method", false, false, false, 23))) {
                // line 24
                echo "                            <i class=\"fas fa-thumbs-up\"></i>
                        ";
            } else {
                // line 26
                echo "                            <i class=\"far fa-thumbs-up\"></i>
                        ";
            }
            // line 28
            echo "                          
                            <span class=\"js-like\">";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 29)), "html", null, true);
            echo "</span>
                            <span class=\"js-label\">J'aime</span>
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "<script>

    function onLinkClick(event){
        event.preventDefault();
        let url = this.href;
        fetch(url)
            .then(function (response) {
                response.json()
                    .then(function (value) {
                        console.log(value);
                    });
            });
    }

    let js_link = document.querySelectorAll('.js-link');
    js_link.forEach(function(link){
        link.addEventListener('click',function(event){
            event.preventDefault();
            let url = this.href;
            fetch(url).then(function (response) {
                console.log(response.status)
                response.json().then(function (value) {
                    if(value.user===true){
                        let count = link.querySelector('.js-like')
                        count.textContent=value.count
    
                        let thumb = link.querySelector('i');
    
                        if (thumb.classList.contains('fas')) thumb.classList.replace('fas','far')
    
                        else thumb.classList.replace('far', 'fas')
                    }
                    else{
                        alert(value.message)
                    }
                });
            })
        })
    })
        
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 41,  166 => 39,  154 => 35,  142 => 29,  139 => 28,  135 => 26,  131 => 24,  129 => 23,  124 => 21,  119 => 19,  115 => 18,  111 => 16,  107 => 15,  103 => 13,  99 => 11,  95 => 9,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les articles !{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"my-3\">Nos articles</h1>
        {% if not is_granted('ROLE_USER') %}
            <a href=\"/login\" class=\"my-2 btn btn-success\">Connexion</a>
        {% else %}
            <a href=\"/logout\" class=\"my-2 btn btn-danger\">Déconnexion</a>
        {% endif %}
        <div class=\"row\">
            
            {% for post in posts %}
                <div class=\"col-3 mb-3\">
                    <div class=\"border border-dark rounded p-2\">
                        <h3>{{post.title}}</h3>
                        <p>{{post.introduction}}</p>
                        <a href=\"#\" class=\"btn btn-primary\">Lire la suite</a>
                        <a href=\"{{ path('like',{'id':post.id}) }}\" class=\"btn btn-link js-link\">
                           
                        {% if app.user and post.isLikedByUser(app.user) %}
                            <i class=\"fas fa-thumbs-up\"></i>
                        {% else %}
                            <i class=\"far fa-thumbs-up\"></i>
                        {% endif %}
                          
                            <span class=\"js-like\">{{ post.likes|length }}</span>
                            <span class=\"js-label\">J'aime</span>
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
{# <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script> #}
<script>

    function onLinkClick(event){
        event.preventDefault();
        let url = this.href;
        fetch(url)
            .then(function (response) {
                response.json()
                    .then(function (value) {
                        console.log(value);
                    });
            });
    }

    let js_link = document.querySelectorAll('.js-link');
    js_link.forEach(function(link){
        link.addEventListener('click',function(event){
            event.preventDefault();
            let url = this.href;
            fetch(url).then(function (response) {
                console.log(response.status)
                response.json().then(function (value) {
                    if(value.user===true){
                        let count = link.querySelector('.js-like')
                        count.textContent=value.count
    
                        let thumb = link.querySelector('i');
    
                        if (thumb.classList.contains('fas')) thumb.classList.replace('fas','far')
    
                        else thumb.classList.replace('far', 'fas')
                    }
                    else{
                        alert(value.message)
                    }
                });
            })
        })
    })
        
</script>

{% endblock %}", "post/index.html.twig", "/var/www/html/cours-ajax/templates/post/index.html.twig");
    }
}
