USE sistema_vendas;

-- GrupoUsuario Padrão
INSERT INTO grupousuario (Nome, Descricao) VALUES
('Sistema', 'Grupo de Usuarios Responsavel Pelo Sistema'),
('Administrador', 'Gerenciador de Perfis e Recursos do Sistema'),
('Generico', 'Grupo de usuarios padrão do sistema');

SELECT * FROM usuario;

-- Usuario Padrão 
INSERT INTO Usuario
(`NomeUsuario`,`Senha`,`Email`,`GrupoUsuarioID`,`Ativo`,`DataCriacao`,`DataAtualizacao`,`UsuarioAtualizacao`) VALUES
('System','System@123','system@mail.com', 1,1, current_timestamp(), current_timestamp(),null);

-- Permissões padrão do Sistema
INSERT INTO Permissao (Nome, Descricao) VALUES
('Gerenciar Usuarios','Permissão de administrar os papeis de um usuario'),
('Visualizar Produtos', 'Permissão de visualizar todos os produtos'),
('Gerenciar Pedidos', 'Permissão de alterar os status de um pedido');

-- Mapeamento inicial de permissões por grupo
INSERT INTO Permissaogrupo (PermissaoID, GrupoUsuarioID) VALUES 
(1, 1), (1,2),
(2, 1), (2,2), (2, 3),
(3, 2);