<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Planning;

class PlanningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {{{  }}
    $plannings = [
        [
            'id' => '1',
            'spreadsheet_id' => '1',
            'discipline_id' => '1',
            'date' => '2024-01-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Introdução à Álgebra',
            'skills' => 'Operações algébricas básicas',
            'resources' => 'Livro didático, Folha de exercícios',
            'methodologies' => 'Aula expositiva, Trabalho em grupo',
            'projects' => 'Projeto de Álgebra'
        ],
        [
            'id' => '2',
            'spreadsheet_id' => '1',
            'discipline_id' => '1',
            'date' => '2024-02-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Fundamentos de Geometria',
            'skills' => 'Formas e ângulos geométricos',
            'resources' => 'Ferramentas geométricas, Recursos online',
            'methodologies' => 'Demonstração, Resolução de problemas',
            'projects' => 'Construções geométricas'
        ],
        [
            'id' => '6',
            'spreadsheet_id' => '1',
            'discipline_id' => '1',
            'date' => '2024-06-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Álgebra Avançada',
            'skills' => 'Equações e desigualdades',
            'resources' => 'Software matemático, Conjuntos de problemas',
            'methodologies' => 'Oficinas, Prática individual',
            'projects' => 'Modelagem algébrica'
        ],
        [
            'id' => '17',
            'spreadsheet_id' => '1',
            'discipline_id' => '1',
            'date' => '2024-07-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Estatística Básica',
            'skills' => 'Conceitos de estatística, Análise de dados',
            'resources' => 'Calculadora, Folha de exercícios',
            'methodologies' => 'Aula expositiva, Estudos de caso',
            'projects' => 'Projeto de análise de dados'
        ],
        [
            'id' => '18',
            'spreadsheet_id' => '1',
            'discipline_id' => '1',
            'date' => '2024-08-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Trigonometria',
            'skills' => 'Funções trigonométricas, Aplicações práticas',
            'resources' => 'Livro didático, Software de geometria',
            'methodologies' => 'Aula expositiva, Prática em laboratório',
            'projects' => 'Projeto de trigonometria'
        ],
        [
            'id' => '3',
            'spreadsheet_id' => '2',
            'discipline_id' => '2',
            'date' => '2024-03-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'História da Ciência',
            'skills' => 'Análise histórica, Revoluções científicas',
            'resources' => 'Livros, Documentários',
            'methodologies' => 'Debate, Projetos de pesquisa',
            'projects' => 'Descobertas científicas'
        ],
        [
            'id' => '4',
            'spreadsheet_id' => '2',
            'discipline_id' => '2',
            'date' => '2024-04-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Apreciação Literária',
            'skills' => 'Análise crítica, Técnicas literárias',
            'resources' => 'Romances, Poemas',
            'methodologies' => 'Leitura interativa, Escrita criativa',
            'projects' => 'Análise literária'
        ],
        [
            'id' => '12',
            'spreadsheet_id' => '2',
            'discipline_id' => '2',
            'date' => '2024-02-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Gramática Portuguesa',
            'skills' => 'Regras gramaticais, Habilidades de escrita',
            'resources' => 'Livro de gramática, Exercícios',
            'methodologies' => 'Discussão, Exercícios',
            'projects' => 'Caderno de gramática'
        ],
        [
            'id' => '13',
            'spreadsheet_id' => '2',
            'discipline_id' => '2',
            'date' => '2024-03-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'História do Brasil',
            'skills' => 'Análise histórica',
            'resources' => 'Livro de história, Mapas',
            'methodologies' => 'Aula expositiva, Pesquisa',
            'projects' => 'Linha do tempo histórica'
        ],
        [
            'id' => '14',
            'spreadsheet_id' => '2',
            'discipline_id' => '2',
            'date' => '2024-04-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Geografia da Europa',
            'skills' => 'Leitura de mapas, Análise geográfica',
            'resources' => 'Atlas, Slides',
            'methodologies' => 'Aula expositiva, Exercícios com mapas',
            'projects' => 'Relatório geográfico'
        ],
        [
            'id' => '19',
            'spreadsheet_id' => '2',
            'discipline_id' => '2',
            'date' => '2024-05-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Literatura Brasileira',
            'skills' => 'Análise de textos literários brasileiros',
            'resources' => 'Romances, Contos',
            'methodologies' => 'Leitura crítica, Discussão em grupo',
            'projects' => 'Ensaio literário'
        ],
        [
            'id' => '20',
            'spreadsheet_id' => '2',
            'discipline_id' => '2',
            'date' => '2024-06-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Redação',
            'skills' => 'Estrutura textual, Coesão e coerência',
            'resources' => 'Textos de exemplo, Exercícios práticos',
            'methodologies' => 'Oficinas de escrita, Revisão de textos',
            'projects' => 'Produção de redação'
        ],
        [
            'id' => '21',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-01-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Introdução à Química',
            'skills' => 'Conceitos básicos de química, Elementos químicos',
            'resources' => 'Livro didático, Kit de química',
            'methodologies' => 'Aula expositiva, Experimentos em laboratório',
            'projects' => 'Experimento de separação de misturas'
        ],
        [
            'id' => '22',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-02-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Ligação Química',
            'skills' => 'Tipos de ligações químicas, Estruturas moleculares',
            'resources' => 'Modelos moleculares, Vídeos educacionais',
            'methodologies' => 'Aula expositiva, Construção de modelos',
            'projects' => 'Projeto de estruturas moleculares'
        ],
        [
            'id' => '23',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-03-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Reações Químicas',
            'skills' => 'Classificação e balanceamento de reações',
            'resources' => 'Tabela periódica, Kit de reações químicas',
            'methodologies' => 'Aula expositiva, Experimentos',
            'projects' => 'Análise de reações químicas'
        ],
        [
            'id' => '24',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-04-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Estequiometria',
            'skills' => 'Cálculos estequiométricos, Relações molares',
            'resources' => 'Calculadora científica, Exercícios práticos',
            'methodologies' => 'Aula expositiva, Resolução de problemas',
            'projects' => 'Projeto de cálculo estequiométrico'
        ],
        [
            'id' => '25',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-05-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Ácidos e Bases',
            'skills' => 'Propriedades de ácidos e bases, pH e pOH',
            'resources' => 'Indicadores de pH, Kit de laboratório',
            'methodologies' => 'Aula expositiva, Experimentos práticos',
            'projects' => 'Projeto de titulação ácido-base'
        ],
        [
            'id' => '26',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-06-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Termoquímica',
            'skills' => 'Energia em reações químicas, Entalpia',
            'resources' => 'Gráficos de energia, Simulações online',
            'methodologies' => 'Aula expositiva, Experimentos controlados',
            'projects' => 'Estudo de reações endotérmicas e exotérmicas'
        ],
        [
            'id' => '27',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-07-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Equilíbrio Químico',
            'skills' => 'Princípio de Le Chatelier, Constante de equilíbrio',
            'resources' => 'Laboratório virtual, Exercícios práticos',
            'methodologies' => 'Aula expositiva, Simulações',
            'projects' => 'Análise de sistemas em equilíbrio'
        ],
        [
            'id' => '28',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-08-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Cinética Química',
            'skills' => 'Velocidade das reações, Fatores que influenciam a velocidade',
            'resources' => 'Gráficos de reação, Kit de reação rápida',
            'methodologies' => 'Aula expositiva, Experimentos cronometrados',
            'projects' => 'Projeto de estudo cinético'
        ],
        [
            'id' => '29',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-09-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Química Orgânica',
            'skills' => 'Compostos orgânicos, Funções orgânicas',
            'resources' => 'Modelos de carbono, Vídeos explicativos',
            'methodologies' => 'Aula expositiva, Construção de modelos',
            'projects' => 'Análise de compostos orgânicos'
        ],
        [
            'id' => '30',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-10-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Química Ambiental',
            'skills' => 'Impactos ambientais, Ciclos biogeoquímicos',
            'resources' => 'Artigos científicos, Documentários',
            'methodologies' => 'Debates, Projetos de pesquisa',
            'projects' => 'Projeto de análise ambiental'
        ],
        [
            'id' => '31',
            'spreadsheet_id' => '3',
            'discipline_id' => '3',
            'date' => '2024-11-01',
            'resume' => 'Resumo do planejamento',
            'contents' => 'Eletroquímica',
            'skills' => 'Células galvânicas, Eletrólise',
            'resources' => 'Kit de eletroquímica, Vídeos educativos',
            'methodologies' => 'Aula expositiva, Experimentos em laboratório',
            'projects' => 'Estudo de reações eletroquímicas'
        ]
    ];
    
        
        foreach ($plannings as $planning) {
            Planning::create([
                'id' => $planning['id'],
                'spreadsheet_id' => $planning['spreadsheet_id'],
                'date' => $planning['date'],
                'resume' => $planning['resume'],
                'contents' => $planning['contents'],
                'skills' => $planning['skills'],
                'resources' => $planning['resources'],
                'methodologies' => $planning['methodologies'],
                'projects' => $planning['projects'],
            ]);
        }
    }
}
