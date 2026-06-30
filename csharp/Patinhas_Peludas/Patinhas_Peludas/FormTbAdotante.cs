using MySqlConnector;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace Patinhas_Peludas
{
    public partial class FormTbAdotante : Form
    {
        public FormTbAdotante()
        {
            InitializeComponent();
        }

        const string DADOS_CONN = "server=localhost;user=root;password=;database=db_patinhapeludas";

        private void FormTbAdotantes_load(object sender, EventArgs e)
        {
            using (MySqlConnection conn = new MySqlConnection(DADOS_CONN))
            {
                conn.Open();
                string scriptConsulta = "SELECT * FROM tb_adotantes";

                using (MySqlCommand comando = new MySqlCommand(scriptConsulta, conn))
                {
                    MySqlDataAdapter resultadoConsulta = new MySqlDataAdapter(comando);

                    DataTable dt = new DataTable();
                    resultadoConsulta.Fill(dt);

                    dgvTabelaAdotante.DataSource = dt;
                }
                conn.Close();
            }
        }

        private void btnPesquisar_Click(object sender, EventArgs e)
        {

            string nomeConsulta = tbPesquisar.Text;

            using (MySqlConnection conn = new MySqlConnection(DADOS_CONN))
            {
                conn.Open();
                string scriptConsultaNome = "";

                if(nomeConsulta != string.Empty)
                {
                    scriptConsultaNome = "SELECT * FROM tb_adotantes WHERE nome_adotante LIKE @nome";
                }
                else
                {
                    scriptConsultaNome = "SELECT * FROM tb_adotantes";
                }

                using (MySqlCommand comando = new MySqlCommand(scriptConsultaNome, conn))
                {
                    if (nomeConsulta != string.Empty)
                    {
                        comando.Parameters.AddWithValue("@nome", nomeConsulta + "%");
                    }

                    MySqlDataAdapter resultadoConsultaMySQL = new MySqlDataAdapter(comando);

                    DataTable dt = new DataTable();

                    resultadoConsultaMySQL.Fill(dt);

                    dgvTabelaAdotante.DataSource= dt;
                }

                conn.Close() ;
            }
        }
    }
}
