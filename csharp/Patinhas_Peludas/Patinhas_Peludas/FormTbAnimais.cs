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
    }
}
