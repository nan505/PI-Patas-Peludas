using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using MySqlConnector;

namespace Patinhas_Peludas
{
    public partial class FormTbAnimais : Form
    {
        public FormTbAnimais()
        {
            InitializeComponent();
        }

        const string DADOS_CONN = "server=localhost;user=root;password=;database=db_patinhapeludas";

        private void FormTbAnimais_Load(object sender, EventArgs e)
        {
            using (MySqlConnection conn = new MySqlConnection(DADOS_CONN))
            {
                conn.Open();

                string scripConsulta = "SELECT * FROM tb_informacoes_gatos";

                using (MySqlCommand comando = new MySqlCommand(scripConsulta, conn))
                {
                    MySqlDataAdapter resultadoConsulta = new MySqlDataAdapter(comando);

                    DataTable dt = new DataTable();
                    resultadoConsulta.Fill(dt);

                    dgvTbAnimais.DataSource = dt;
                }

                conn.Close();
            }
        }

        private void btnConsultarNome_Click(object sender, EventArgs e)
        {
            string nomeConsulta = tBoxNome.Text;

            using(MySqlConnection conn = new MySqlConnection(DADOS_CONN))
            {
                conn.Open();
                
                string scriptConsultaNome = "";

                if(nomeConsulta != string.Empty)
                {
                    scriptConsultaNome = "SELECT * FROM tb_informacoes_gatos WHERE nome LIKE @nome";
                }
                else
                {
                    scriptConsultaNome = "SELECT * FROM tb_informacoes_gatos";
                }

                using(MySqlCommand comando = new MySqlCommand(scriptConsultaNome, conn))
                {
                    if(nomeConsulta != string.Empty)
                    {
                        comando.Parameters.AddWithValue("@nome", nomeConsulta + "%");
                    }

                    MySqlDataAdapter resultadoConsultaMySQL = new MySqlDataAdapter(comando);

                    DataTable dt = new DataTable();

                    resultadoConsultaMySQL.Fill(dt);

                    dgvTbAnimais.DataSource = dt;
                }

                conn.Close();
            }
            
        }
    }
}
