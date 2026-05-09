EdTech Full Stack Ecosystem: Arquitetura Escalável e Fluxo de Vendas (WP & Moodle)
Este repositório reúne os módulos técnicos e a engenharia de backend desenvolvidos para a gestão e integração de um ecossistema educacional de alta escala. O projeto foi estruturado para gerenciar uma infraestrutura multi-instância, unindo o WordPress como motor de conversão ao Moodle LMS para a entrega acadêmica.

🔗 Projeto em Produção
A implementação real desta arquitetura pode ser visualizada no link abaixo, onde gerenciei toda a camada técnica e de integração:

Live Demo: https://etadgo.com.br/

🚀 Engenharia de Escala e Entrega (Nível Pleno)
Arquitetura Multi-Instância: Liderança técnica na manutenção de um histórico de mais de 200 ecossistemas individuais, com cerca de 100 plataformas ativas simultaneamente e 99% de uptime.

Fluxo Transacional Automatizado: Integração de checkout via API com MercadoPago e PagSeguro, garantindo a automação completa: venda no CMS -> matrícula automática -> acesso imediato no LMS.

Gestão de Infraestrutura Linux: Administração de servidores e deploy, com foco no isolamento de dados sensíveis e segurança de diretórios privados (moodledata).

🧩 Detalhamento dos Módulos Técnicos
1. Gestão Dinâmica de Atributos (Shortcodes)
Abstração de Regras de Negócio: Centralização de variáveis críticas (preços, contatos e dados institucionais) em um único ponto lógico.

Manutenibilidade: Permite atualizações globais em centenas de landing pages de forma instantânea, reduzindo o overhead de manutenção e eliminando erros manuais.

2. Query Engine & Data Optimization (query-engine.php)
Performance SQL: Implementação de consultas otimizadas via WP_Query para garantir baixo tempo de resposta (TTFB) mesmo em catálogos extensos de cursos.

Manipulação de Taxonomias: Motor lógico para hierarquização de categorias acadêmicas e entrega padronizada de dados para o Frontend.

3. Admin Layout Engine (admin-metabox-layout.php)
Custom Meta Boxes: Desenvolvimento de interfaces no painel administrativo via Post Meta API, oferecendo autonomia para a equipe de operações gerenciar layouts visualmente.

Segurança (Nonces): Implementação de campos de segurança para validar a origem das requisições e garantir a integridade do banco de dados.

4. Security & Infrastructure Filters (theme-security.php)
Sanitização Avançada: Uso rigoroso de wp_kses e filtros de saída para mitigar ataques de XSS e injeção de código.

Configuração de Ambiente: Blueprint de infraestrutura focado em segurança de diretórios (0775) e isolamento de banco de dados.

🛠️ Stack Tecnológica
Backend: PHP 7.4/8.1 (Core & Laravel) e Node.js.

LMS Framework: Moodle (Arquitetura de plugins e autenticação).

CMS & E-commerce: WordPress (Desenvolvimento de Temas, Plugins e Meta Boxes).

Data Engineering: Modelagem e otimização de bancos de dados SQL.

🛡️ Segurança e Compliance
Como padrão de desenvolvimento Pleno, todos os dados sensíveis, credenciais e informações de clientes foram anonimizados neste repositório para preservação de privacidade e segurança.